<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('alumnos', AlumnosController::class);