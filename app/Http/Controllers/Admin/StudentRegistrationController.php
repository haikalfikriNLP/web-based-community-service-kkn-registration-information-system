<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentRegistration;

class StudentRegistrationController extends Controller
{
    public function index()
    {
        $registrations = StudentRegistration::all();
        return view('admin.student_registration.index', compact('registrations'));
    }

    public function show($id)
    {
        $registration = StudentRegistration::findOrFail($id);
        return view('admin.student_registration.show', compact('registration'));
    }

    public function approve($id)
    {
        $registration = StudentRegistration::findOrFail($id);
        $registration->registration_status = 'approved';
        $registration->save();

        return redirect()->route('admin.student_registration.index')->with('success', 'Registration approved.');
    }

    public function reject($id, Request $request)
    {
        $registration = StudentRegistration::findOrFail($id);
        $registration->registration_status = 'rejected';
        $registration->comments = $request->input('comments');
        $registration->save();

        return redirect()->route('admin.student_registration.index')->with('success', 'Registration rejected.');
    }

    public function comment($id, Request $request)
    {
        $registration = StudentRegistration::findOrFail($id);
        $registration->comments = $request->input('comments');
        $registration->save();

        return redirect()->route('admin.student_registration.show', $id)->with('success', 'Comment added.');
    }
}
