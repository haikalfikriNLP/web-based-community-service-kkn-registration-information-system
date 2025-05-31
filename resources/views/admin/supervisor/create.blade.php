@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Supervisor</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.supervisor.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Save</button>
        <a href="{{ route('admin.supervisor.index') }}" class="btn btn-secondary mt-2">Cancel</a>
    </form>
</div>
@endsection
