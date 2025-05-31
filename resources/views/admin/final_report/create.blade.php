@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Final Report</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.final_report.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="group_id">Group</label>
            <select name="group_id" class="form-control" required>
                <option value="">Select Group</option>
                @foreach($groups as $group)
                    <option value="{{ $group->id }}" {{ old('group_id') == $group->id ? 'selected' : '' }}>{{ $group->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">Report Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>
        <div class="form-group">
            <label for="submitted_at">Submission Date</label>
            <input type="date" name="submitted_at" class="form-control" value="{{ old('submitted_at') }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" class="form-control" value="{{ old('status') }}" required>
        </div>
        <div class="form-group">
            <label for="comments">Comments</label>
            <textarea name="comments" class="form-control" rows="4">{{ old('comments') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Save</button>
        <a href="{{ route('admin.final_report.index') }}" class="btn btn-secondary mt-2">Cancel</a>
    </form>
</div>
@endsection
