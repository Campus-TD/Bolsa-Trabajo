<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Jobs;

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
    return view('auth.login');
});

Route::resource('empleos', 'App\Http\Controllers\JobController');
Route::resource('carreras', 'App\Http\Controllers\CareerController');
Route::resource('ciudades', 'App\Http\Controllers\CityController');
Route::resource('empleo', 'App\Http\Controllers\EmploymentController');
Route::resource('tasks', 'App\Http\Controllers\TaskController');
Route::resource('years', 'App\Http\Controllers\YearController');
Route::post('empleos/create', 'App\Http\Controllers\JobController@store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/empleos', Jobs::class)->name('empleos');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/form', function () {
        return view('form');
    })->name('form');
});
