<?php

use App\Mail\JobPosted;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Arr;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Models\Job;

//Page pour voir le dummy mail
Route::get('/test', function() {
    return new JobPosted(Job::first());
});

//page principale
Route::view('/', 'home');
//Nous contacter
Route::view('/contact', 'contact');

Route::controller(JobController::class)->group(function() {
//Index des jobs
Route::get('/jobs', 'index');
//Creer un job
Route::get('/jobs/create', 'create')->middleware('auth');
//Voir un job
Route::get('/jobs/{job}', 'show');
//Form pour créer un job
Route::post('/jobs', 'create');
//Update un job
Route::patch('/jobs/{job}', 'update')
->middleware('auth')
->can('edit-job', 'job');

//Delete un job
Route::delete('/jobs/{job}', 'delete')
->middleware('auth')
->can('edit-job', 'job');

//Voir le form edit
Route::get('/jobs/{job}/edit', 'edit')
->middleware('auth')
->can('edit', 'job');
});
//Toutes les routes supportées par Laravel
Route::get('/register',[RegisteredUserController::class, 'create']);
Route::post('/register',[RegisteredUserController::class, 'store']);
Route::get('/login',[SessionController::class, 'create'])->name('login');
Route::post('/login',[SessionController::class, 'store']);
Route::post('/logout',[SessionController::class, 'destroy']);
