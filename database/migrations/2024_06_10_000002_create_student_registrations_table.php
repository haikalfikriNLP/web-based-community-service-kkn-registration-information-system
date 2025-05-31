<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create('student_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_id');
            $table->string('program_study');
            $table->enum('registration_status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_registrations');
    }
}
