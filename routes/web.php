<?php

use App\Http\Controllers\Attendance;
use App\Http\Controllers\BuildingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
    return view('admin.index');
});
Route::get('/home',[DashboardController::class, 'index'] )->name('dashboardTest');
Route::get('/details',[BuildingController::class, 'index'] )->name('getfilter');
Route::get('/filters/search',[BuildingController::class, 'filter'] )->name('filter');
Route::get('/attendance',[BuildingController::class, 'attendance'] )->name('attendance');
