<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@show');

Route::get('login/', 'AuthController@showLogin')->name('login');
Route::post('/login', 'AuthController@prosesLogin');

Route::get('register', 'AuthController@showRegister')->name('register');
Route::post('register', 'AuthController@prosesRegister');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('logout', 'AuthController@prosesLogout');

    Route::get('beranda', 'Admin\BerandaController@show');

    Route::get('anggota', 'Admin\AnggotaController@show')->name('admin.anggota.show');
    Route::get('anggota/tambah', 'Admin\AnggotaController@formTambah')->name('admin.anggota.create');
    Route::post('anggota/simpan', 'Admin\AnggotaController@prosesSimpan');
    Route::get('anggota/{id}/ubah', 'Admin\AnggotaController@formUbah')->name('admin.anggota.edit');
    Route::put('anggota/{id}/update', 'Admin\AnggotaController@prosesUpdate');
    Route::get('anggota/{id}/cetak/kartu_anggota', 'Admin\AnggotaController@cetakKartuAnggota')->name('admin.anggota.cetak.kartu_anggota');
    Route::delete('anggota/hapus', 'Admin\AnggotaController@prosesHapus')->name('admin.anggota.destroy');
    Route::put('anggota/status', 'Admin\AnggotaController@prosesUpdateStatus')->name('admin.anggota.status');

    Route::get('admin', 'Admin\AdminController@show')->name('admin.admin.show');
    Route::get('admin/tambah', 'Admin\AdminController@formTambah')->name('admin.admin.create');
    Route::post('admin/simpan', 'Admin\AdminController@prosesSimpan');
    Route::get('admin/{id}/ubah', 'Admin\AdminController@formUbah')->name('admin.admin.edit');
    Route::put('admin/{id}/update', 'Admin\AdminController@prosesUpdate');
    Route::delete('admin/hapus', 'Admin\AdminController@prosesHapus')->name('admin.admin.destroy');

    // KKN Location routes
    Route::get('location', 'Admin\LocationController@index')->name('admin.location.index');
    Route::get('location/create', 'Admin\LocationController@create')->name('admin.location.create');
    Route::post('location/store', 'Admin\LocationController@store')->name('admin.location.store');
    Route::get('location/{id}/edit', 'Admin\LocationController@edit')->name('admin.location.edit');
    Route::put('location/{id}/update', 'Admin\LocationController@update')->name('admin.location.update');
    Route::delete('location/{id}/delete', 'Admin\LocationController@destroy')->name('admin.location.destroy');

    // KKN Announcement routes
    Route::get('announcement', 'Admin\AnnouncementController@index')->name('admin.announcement.index');
    Route::get('announcement/create', 'Admin\AnnouncementController@create')->name('admin.announcement.create');
    Route::post('announcement/store', 'Admin\AnnouncementController@store')->name('admin.announcement.store');
    Route::get('announcement/{id}/edit', 'Admin\AnnouncementController@edit')->name('admin.announcement.edit');
    Route::put('announcement/{id}/update', 'Admin\AnnouncementController@update')->name('admin.announcement.update');
    Route::delete('announcement/{id}/delete', 'Admin\AnnouncementController@destroy')->name('admin.announcement.destroy');

    // KKN Student Registration routes
    Route::get('student_registration', 'Admin\StudentRegistrationController@index')->name('admin.student_registration.index');
    Route::get('student_registration/{id}', 'Admin\StudentRegistrationController@show')->name('admin.student_registration.show');
    Route::put('student_registration/{id}/approve', 'Admin\StudentRegistrationController@approve')->name('admin.student_registration.approve');
    Route::put('student_registration/{id}/reject', 'Admin\StudentRegistrationController@reject')->name('admin.student_registration.reject');
    Route::put('student_registration/{id}/comment', 'Admin\StudentRegistrationController@comment')->name('admin.student_registration.comment');

    // KKN Group routes
    Route::get('group', 'Admin\GroupController@index')->name('admin.group.index');
    Route::get('group/create', 'Admin\GroupController@create')->name('admin.group.create');
    Route::post('group/store', 'Admin\GroupController@store')->name('admin.group.store');
    Route::get('group/{id}/edit', 'Admin\GroupController@edit')->name('admin.group.edit');
    Route::put('group/{id}/update', 'Admin\GroupController@update')->name('admin.group.update');
    Route::delete('group/{id}/delete', 'Admin\GroupController@destroy')->name('admin.group.destroy');

    // KKN Supervisor routes
    Route::get('supervisor', 'Admin\SupervisorController@index')->name('admin.supervisor.index');
    Route::get('supervisor/create', 'Admin\SupervisorController@create')->name('admin.supervisor.create');
    Route::post('supervisor/store', 'Admin\SupervisorController@store')->name('admin.supervisor.store');
    Route::get('supervisor/{id}/edit', 'Admin\SupervisorController@edit')->name('admin.supervisor.edit');
    Route::put('supervisor/{id}/update', 'Admin\SupervisorController@update')->name('admin.supervisor.update');
    Route::delete('supervisor/{id}/delete', 'Admin\SupervisorController@destroy')->name('admin.supervisor.destroy');

    // KKN Progress Monitoring routes
    Route::get('progress_monitoring', 'Admin\ProgressMonitoringController@index')->name('admin.progress_monitoring.index');
    Route::get('progress_monitoring/create', 'Admin\ProgressMonitoringController@create')->name('admin.progress_monitoring.create');
    Route::post('progress_monitoring/store', 'Admin\ProgressMonitoringController@store')->name('admin.progress_monitoring.store');
    Route::get('progress_monitoring/{id}/edit', 'Admin\ProgressMonitoringController@edit')->name('admin.progress_monitoring.edit');
    Route::put('progress_monitoring/{id}/update', 'Admin\ProgressMonitoringController@update')->name('admin.progress_monitoring.update');
    Route::delete('progress_monitoring/{id}/delete', 'Admin\ProgressMonitoringController@destroy')->name('admin.progress_monitoring.destroy');

    // KKN Final Report routes
    Route::get('final_report', 'Admin\FinalReportController@index')->name('admin.final_report.index');
    Route::get('final_report/create', 'Admin\FinalReportController@create')->name('admin.final_report.create');
    Route::post('final_report/store', 'Admin\FinalReportController@store')->name('admin.final_report.store');
    Route::get('final_report/{id}/edit', 'Admin\FinalReportController@edit')->name('admin.final_report.edit');
    Route::put('final_report/{id}/update', 'Admin\FinalReportController@update')->name('admin.final_report.update');
    Route::delete('final_report/{id}/delete', 'Admin\FinalReportController@destroy')->name('admin.final_report.destroy');

    // Transaksi routes
    Route::get('transaksi', 'Admin\TransaksiController@show')->name('admin.transaksi.show');
    Route::get('transaksi/tambah', 'Admin\TransaksiController@formTambah')->name('admin.transaksi.create');
    Route::post('transaksi/simpan', 'Admin\TransaksiController@prosesSimpan')->name('admin.transaksi.store');
    Route::put('transaksi/status', 'Admin\TransaksiController@status')->name('admin.transaksi.status');
    Route::delete('transaksi/hapus', 'Admin\TransaksiController@hapus')->name('admin.transaksi.destroy');
});

