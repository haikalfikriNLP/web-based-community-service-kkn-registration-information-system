@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Progress Monitoring</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.progress_monitoring.update', $progress->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="group_id">Group</label>
            <select name="group_id" class="form-control" required>
                <option value="">Select Group</option>
                @foreach($groups as $group)
                    <option value="{{ $group->id }}" {{ old('group_id', $progress->group_id) == $group->id ? 'selected' : '' }}>{{ $group->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" value="{{ old('date', $progress->date->format('Y-m-d')) }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" class="form-control" value="{{ old('status', $progress->status) }}" required>
        </div>
        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea name="notes" class="form-control" rows="4">{{ old('notes', $progress->notes) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
        <a href="{{ route('admin.progress_monitoring.index') }}" class="btn btn-secondary mt-2">Cancel</a>
    </form>
</div>
@endsection
