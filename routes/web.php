<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImpersonateController;
use App\Http\Controllers\NotificationController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.userList')->middleware('is_admin');
Route::get('/users/{user}/impersonate', [App\Http\Controllers\ImpersonateController::class, 'impersonate'])->name('impersonate')->middleware('is_admin');;
Route::get('/notifications/create', [App\Http\Controllers\NotificationController::class, 'create'])->name('notifications.create');
Route::post('/notifications', [App\Http\Controllers\NotificationController::class, 'store'])->name('notifications.store');
Route::get('/notifications/list', [App\Http\Controllers\NotificationController::class, 'listall'])->name('notifications.list')->middleware('is_admin');
