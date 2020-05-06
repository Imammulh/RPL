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
// page search ktp route
Route::get('/', 'PagesController@home');

// page login-admin route
Route::get('/login-admin', 'PagesController@login');

// page bantuan
Route::get('/bantuan', 'PagesController@bantuan');

// page dashboard profil
Route::get('/dashboard-profil', 'DashboardController@profil');

// Page dashboard all
Route::get('/dashboard-all', 'DashboardController@all');

// page dahsboard proses
Route::get('/dashboard-process', 'DashboardController@process');

// page dashboard selesai
Route::get('/dashboard-done', 'DashboardController@done');
