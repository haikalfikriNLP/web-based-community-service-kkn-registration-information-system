@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Group</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.group.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Group Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="location_id">Location</label>
            <select name="location_id" class="form-control" required>
                <option value="">Select Location</option>
                @foreach($locations as $location)
                    <option value="{{ $location->id }}" {{ old('location_id') == $location->id ? 'selected' : '' }}>{{ $location->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="supervisor_id">Supervisor</label>
            <select name="supervisor_id" class="form-control" required>
                <option value="">Select Supervisor</option>
                @foreach($supervisors as $supervisor)
                    <option value="{{ $supervisor->id }}" {{ old('supervisor_id') == $supervisor->id ? 'selected' : '' }}>{{ $supervisor->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Save</button>
        <a href="{{ route('admin.group.index') }}" class="btn btn-secondary mt-2">Cancel</a>
    </form>
</div>
@endsection
