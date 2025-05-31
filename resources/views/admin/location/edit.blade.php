@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Location</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.location.update', $location->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Location Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $location->name) }}" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" class="form-control" rows="3" required>{{ old('address', $location->address) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
        <a href="{{ route('admin.location.index') }}" class="btn btn-secondary mt-2">Cancel</a>
    </form>
</div>
@endsection
