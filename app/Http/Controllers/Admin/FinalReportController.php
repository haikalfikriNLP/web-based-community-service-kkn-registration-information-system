<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FinalReport;
use App\Models\Group;
use Illuminate\Support\Facades\Storage;

class FinalReportController extends Controller
{
    public function index()
    {
        $finalReports = FinalReport::with('group')->get();
        return view('admin.final_report.index', compact('finalReports'));
    }

    public function create()
    {
        $groups = Group::all();
        return view('admin.final_report.create', compact('groups'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'report_file' => 'required|file|mimes:pdf,doc,docx',
            'comments' => 'nullable|string',
            'status' => 'required|string',
        ]);

        $path = $request->file('report_file')->store('final_reports');

        FinalReport::create([
            'group_id' => $request->group_id,
            'report_file' => $path,
            'comments' => $request->comments,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.final_report.index')->with('success', 'Final report uploaded successfully.');
    }

    public function edit($id)
    {
        $finalReport = FinalReport::findOrFail($id);
        $groups = Group::all();
        return view('admin.final_report.edit', compact('finalReport', 'groups'));
    }

    public function update(Request $request, $id)
    {
        $finalReport = FinalReport::findOrFail($id);

        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'report_file' => 'nullable|file|mimes:pdf,doc,docx',
            'comments' => 'nullable|string',
            'status' => 'required|string',
        ]);

        if ($request->hasFile('report_file')) {
            // Delete old file
            Storage::delete($finalReport->report_file);
            $path = $request->file('report_file')->store('final_reports');
            $finalReport->report_file = $path;
        }

        $finalReport->group_id = $request->group_id;
        $finalReport->comments = $request->comments;
        $finalReport->status = $request->status;

        $finalReport->save();

        return redirect()->route('admin.final_report.index')->with('success', 'Final report updated successfully.');
    }

    public function destroy($id)
    {
        $finalReport = FinalReport::findOrFail($id);
        Storage::delete($finalReport->report_file);
        $finalReport->delete();

        return redirect()->route('admin.final_report.index')->with('success', 'Final report deleted successfully.');
    }
}
