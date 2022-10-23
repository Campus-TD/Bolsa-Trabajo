<?php

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


Route::resource('empleos', 'App\Http\Controllers\JobController');
Route::redirect('/', '/empleos');
Route::get('/empleos', Jobs::class)->name('empleos');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/form', function () {
        return view('form');
    })->name('form');
    
    Route::resource('carreras', 'App\Http\Controllers\CareerController');
    Route::resource('ciudades', 'App\Http\Controllers\CityController');
    Route::resource('empleo', 'App\Http\Controllers\EmploymentController');
    Route::resource('tasks', 'App\Http\Controllers\TaskController');
    Route::resource('years', 'App\Http\Controllers\YearController');

    Route::resource('softskills', 'App\Http\Controllers\SoftskillController');
    Route::resource('hardskills', 'App\Http\Controllers\HardskillController');
    Route::resource('reports', 'App\Http\Controllers\ReportController');
});