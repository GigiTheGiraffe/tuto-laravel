<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Http\Controllers\JobController;

//page principale
Route::view('/', 'home');
//Nous contacter
Route::view('/contact', 'contact');

/* Version a la main
Route::controller(JobController::class)->group(function() {
//Index des jobs
Route::get('/jobs', 'index');
//Creer un job
Route::get('/jobs/create', 'create');
//Voir un job
Route::get('/jobs/{job}', 'show');
//Form pour créer un job
Route::post('/jobs', 'create');
//Update un job
Route::patch('/jobs/{job}', 'update');
//Delete un job
Route::delete('/jobs/{job}', 'delete');
//Voir le form edit
Route::get('/jobs/{job}/edit', 'edit');
});
*/

//Toutes les routes supportées par Laravel
Route::resource('jobs', JobController::class);