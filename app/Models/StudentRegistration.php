<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRegistration extends Model
{
    use HasFactory;

    protected $table = 'student_registrations';

    protected $fillable = [
        'student_name',
        'student_id',
        'program_study',
        'registration_status', // pending, approved, rejected
        'comments',
    ];
}
