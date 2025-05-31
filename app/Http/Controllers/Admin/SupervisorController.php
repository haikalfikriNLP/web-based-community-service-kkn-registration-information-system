<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supervisor;

class SupervisorController extends Controller
{
    public function index()
    {
        $supervisors = Supervisor::all();
        return view('admin.supervisor.index', compact('supervisors'));
    }

    public function create()
    {
        return view('admin.supervisor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:supervisors,email',
            'phone' => 'nullable|string|max:20',
        ]);

        Supervisor::create($request->all());

        return redirect()->route('admin.supervisor.index')->with('success', 'Supervisor created successfully.');
    }

    public function edit($id)
    {
        $supervisor = Supervisor::findOrFail($id);
        return view('admin.supervisor.edit', compact('supervisor'));
    }

    public function update(Request $request, $id)
    {
        $supervisor = Supervisor::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:supervisors,email,' . $id,
            'phone' => 'nullable|string|max:20',
        ]);

        $supervisor->update($request->all());

        return redirect()->route('admin.supervisor.index')->with('success', 'Supervisor updated successfully.');
    }

    public function destroy($id)
    {
        $supervisor = Supervisor::findOrFail($id);
        $supervisor->delete();

        return redirect()->route('admin.supervisor.index')->with('success', 'Supervisor deleted successfully.');
    }
}
