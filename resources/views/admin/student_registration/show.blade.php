@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Student Registration Details</h1>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $registration->student_name }} ({{ $registration->student_id }})</h5>
            <p class="card-text"><strong>Program Study:</strong> {{ $registration->program_study }}</p>
            <p class="card-text"><strong>Status:</strong> {{ ucfirst($registration->registration_status) }}</p>
            <p class="card-text"><strong>Comments:</strong> {{ $registration->comments }}</p>
        </div>
    </div>

    @if($registration->registration_status == 'pending')
    <form action="{{ route('admin.student_registration.approve', $registration->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-success">Approve</button>
    </form>

    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#rejectModal">Reject</button>

    <!-- Reject Modal -->
    <div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form action="{{ route('admin.student_registration.reject', $registration->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="rejectModalLabel">Reject Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <label for="comments">Comments</label>
                    <textarea name="comments" class="form-control" rows="3" required></textarea>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Reject</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              </div>
            </div>
        </form>
      </div>
    </div>
    @endif

    <a href="{{ route('admin.student_registration.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
