@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Groups</h1>
    <a href="{{ route('admin.group.create') }}" class="btn btn-primary mb-3">Add Group</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Supervisor</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($groups as $group)
            <tr>
                <td>{{ $group->id }}</td>
                <td>{{ $group->name }}</td>
                <td>{{ $group->location->name ?? '' }}</td>
                <td>{{ $group->supervisor->name ?? '' }}</td>
                <td>
                    <a href="{{ route('admin.group.edit', $group->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.group.destroy', $group->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this group?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
