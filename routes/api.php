<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobOfferController;
use App\Http\Controllers\ApplicantController;

// Endpoint para registrar usuarios e implementar JWT
Route::controller(AuthController::class)->group(function () {
    Route::post('auth/login', 'login');
    Route::post('auth/register/user', 'register');
    Route::get('auth/logout', 'logout');
});

// Endpoint para registrar Ofertas de trabajos con usuarios
Route::controller(JobOfferController::class)->group(function () {
    Route::post('job_offer/register', 'register');
    Route::get('job_offer/getAssosiatedCandidates', 'getAssosiatedCandidates');
});
