@extends('layouts.app')

@section('content')
    <div class="header pb-6" style="background-color: #3498db">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Beranda</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Groups</h5>
                                        <span class="h3 font-weight-bold mb-0">{{ \App\Models\Group::count() }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                            <i class="ni ni-briefcase-24"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Supervisors</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ \App\Models\Supervisor::count() }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                            <i class="ni ni-single-02"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Student Registrations</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ \App\Models\StudentRegistration::count() }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                            <i class="ni ni-badge"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Progress Monitorings</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ \App\Models\ProgressMonitoring::count() }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                            <i class="ni ni-check-bold"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Recent Student Registrations (5 Latest)</h3>
                            </div>
                            <div class="col text-right">
                                <a href="/admin/student_registration" class="btn btn-sm btn-primary">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush ">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Student Name</th>
                                    <th>Student ID</th>
                                    <th>Program Study</th>
                                    <th>Registration Status</th>
                                    <th>Comments</th>
                                    <th>Registered At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $list_registrations = \App\Models\StudentRegistration::orderBy('created_at', 'desc')->limit(5)->get();
                                @endphp
                                @foreach ($list_registrations as $registration)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $registration->student_name }}</td>
                                        <td>{{ $registration->student_id }}</td>
                                        <td>{{ $registration->program_study }}</td>
                                        <td>{{ ucfirst($registration->registration_status) }}</td>
                                        <td>{{ $registration->comments }}</td>
                                        <td>{{ $registration->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
