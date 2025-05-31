@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Progress Monitoring</h1>
    <a href="{{ route('admin.progress_monitoring.create') }}" class="btn btn-primary mb-3">Add Progress</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Group</th>
                <th>Date</th>
                <th>Status</th>
                <th>Notes</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($progresses as $progress)
            <tr>
                <td>{{ $progress->id }}</td>
                <td>{{ $progress->group->name ?? '' }}</td>
                <td>{{ $progress->date->format('Y-m-d') }}</td>
                <td>{{ $progress->status }}</td>
                <td>{{ Str::limit($progress->notes, 100) }}</td>
                <td>
                    <a href="{{ route('admin.progress_monitoring.edit', $progress->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.progress_monitoring.destroy', $progress->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this progress record?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
