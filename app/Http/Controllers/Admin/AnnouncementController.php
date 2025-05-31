<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all();
        return view('admin.announcement.index', compact('announcements'));
    }

    public function create()
    {
        return view('admin.announcement.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'published_at' => 'nullable|date',
        ]);

        Announcement::create($request->all());

        return redirect()->route('admin.announcement.index')->with('success', 'Announcement created successfully.');
    }

    public function edit($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('admin.announcement.edit', compact('announcement'));
    }

    public function update(Request $request, $id)
    {
        $announcement = Announcement::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'published_at' => 'nullable|date',
        ]);

        $announcement->update($request->all());

        return redirect()->route('admin.announcement.index')->with('success', 'Announcement updated successfully.');
    }

    public function destroy($id)
    {
        $announcement = Announcement::findOrFail($id);
        $announcement->delete();

        return redirect()->route('admin.announcement.index')->with('success', 'Announcement deleted successfully.');
    }
}
