@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Announcement</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.announcement.update', $announcement->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $announcement->title) }}" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" rows="5" required>{{ old('content', $announcement->content) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
        <a href="{{ route('admin.announcement.index') }}" class="btn btn-secondary mt-2">Cancel</a>
    </form>
</div>
@endsection
