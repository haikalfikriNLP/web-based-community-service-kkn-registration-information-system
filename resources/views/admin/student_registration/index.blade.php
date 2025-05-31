@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Student Registrations</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Student ID</th>
                <th>Program Study</th>
                <th>Status</th>
                <th>Comments</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registrations as $registration)
            <tr>
                <td>{{ $registration->id }}</td>
                <td>{{ $registration->student_name }}</td>
                <td>{{ $registration->student_id }}</td>
                <td>{{ $registration->program_study }}</td>
                <td>{{ ucfirst($registration->registration_status) }}</td>
                <td>{{ $registration->comments }}</td>
                <td>
                    <a href="{{ route('admin.student_registration.show', $registration->id) }}" class="btn btn-info btn-sm">View</a>
                    @if($registration->registration_status == 'pending')
                    <form action="{{ route('admin.student_registration.approve', $registration->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-success btn-sm">Approve</button>
                    </form>
                    <a href="{{ route('admin.student_registration.show', $registration->id) }}" class="btn btn-warning btn-sm">Reject</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
