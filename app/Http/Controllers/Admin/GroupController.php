<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Location;
use App\Models\User;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::with('location', 'supervisor')->get();
        return view('admin.group.index', compact('groups'));
    }

    public function create()
    {
        $locations = Location::all();
        $supervisors = User::where('level', 'supervisor')->get();
        return view('admin.group.create', compact('locations', 'supervisors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location_id' => 'required|exists:locations,id',
            'supervisor_id' => 'required|exists:users,id',
        ]);

        Group::create($request->all());

        return redirect()->route('admin.group.index')->with('success', 'Group created successfully.');
    }

    public function edit($id)
    {
        $group = Group::findOrFail($id);
        $locations = Location::all();
        $supervisors = User::where('level', 'supervisor')->get();
        return view('admin.group.edit', compact('group', 'locations', 'supervisors'));
    }

    public function update(Request $request, $id)
    {
        $group = Group::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'location_id' => 'required|exists:locations,id',
            'supervisor_id' => 'required|exists:users,id',
        ]);

        $group->update($request->all());

        return redirect()->route('admin.group.index')->with('success', 'Group updated successfully.');
    }

    public function destroy($id)
    {
        $group = Group::findOrFail($id);
        $group->delete();

        return redirect()->route('admin.group.index')->with('success', 'Group deleted successfully.');
    }
}
