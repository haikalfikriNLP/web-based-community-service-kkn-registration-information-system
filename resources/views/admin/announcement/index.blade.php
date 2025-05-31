@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Announcements</h1>
    <a href="{{ route('admin.announcement.create') }}" class="btn btn-primary mb-3">Add Announcement</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($announcements as $announcement)
            <tr>
                <td>{{ $announcement->id }}</td>
                <td>{{ $announcement->title }}</td>
                <td>{{ Str::limit($announcement->content, 100) }}</td>
                <td>
                    <a href="{{ route('admin.announcement.edit', $announcement->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.announcement.destroy', $announcement->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this announcement?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
