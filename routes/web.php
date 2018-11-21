<?php

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

Route::get('/', function () {
    return view('admin.dashboard.dashboard');
});

Route::get('admin/dashboard', function () {
    return view('admin.dashboard.dashboard');
});

Route::get('admin/students', function () {
    return view('admin.students.index');
});

Route::get('admin/lecturers', function () {
    return view('admin.lecturers.index');
});

Route::get('admin/admins', function () {
    return view('admin.admins.index');
});