@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Supervisors</h1>
    <a href="{{ route('admin.supervisor.create') }}" class="btn btn-primary mb-3">Add Supervisor</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($supervisors as $supervisor)
            <tr>
                <td>{{ $supervisor->id }}</td>
                <td>{{ $supervisor->name }}</td>
                <td>{{ $supervisor->email }}</td>
                <td>{{ $supervisor->phone }}</td>
                <td>
                    <a href="{{ route('admin.supervisor.edit', $supervisor->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.supervisor.destroy', $supervisor->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this supervisor?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
