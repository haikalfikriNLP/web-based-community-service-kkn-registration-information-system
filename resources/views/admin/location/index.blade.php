@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Locations</h1>
    <a href="{{ route('admin.location.create') }}" class="btn btn-primary mb-3">Add Location</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($locations as $location)
            <tr>
                <td>{{ $location->id }}</td>
                <td>{{ $location->name }}</td>
                <td>{{ $location->address }}</td>
                <td>
                    <a href="{{ route('admin.location.edit', $location->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.location.destroy', $location->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this location?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
