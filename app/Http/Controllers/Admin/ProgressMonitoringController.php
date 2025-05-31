<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProgressMonitoring;
use App\Models\Group;

class ProgressMonitoringController extends Controller
{
    public function index()
    {
        $progresses = ProgressMonitoring::with('group')->get();
        return view('admin.progress_monitoring.index', compact('progresses'));
    }

    public function create()
    {
        $groups = Group::all();
        return view('admin.progress_monitoring.create', compact('groups'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'progress_date' => 'required|date',
            'progress_description' => 'required|string',
            'status' => 'required|string',
        ]);

        ProgressMonitoring::create($request->all());

        return redirect()->route('admin.progress_monitoring.index')->with('success', 'Progress added successfully.');
    }

    public function edit($id)
    {
        $progress = ProgressMonitoring::findOrFail($id);
        $groups = Group::all();
        return view('admin.progress_monitoring.edit', compact('progress', 'groups'));
    }

    public function update(Request $request, $id)
    {
        $progress = ProgressMonitoring::findOrFail($id);

        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'progress_date' => 'required|date',
            'progress_description' => 'required|string',
            'status' => 'required|string',
        ]);

        $progress->update($request->all());

        return redirect()->route('admin.progress_monitoring.index')->with('success', 'Progress updated successfully.');
    }

    public function destroy($id)
    {
        $progress = ProgressMonitoring::findOrFail($id);
        $progress->delete();

        return redirect()->route('admin.progress_monitoring.index')->with('success', 'Progress deleted successfully.');
    }
}
