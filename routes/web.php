<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;

//page principale
Route::get('/', function () {
    return view('home');
});

//Index des jobs
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(5);
    return view('jobs.index', ['jobs' => $jobs]);
});

//Creer un job
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//Voir un job
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    if (!$job) {
        abort(404);
    }
    return view('jobs.show', data: ['job' => $job]);
});

//Nous contacter
Route::get('/contact', function () {
    return view('contact');
});

//Form pour créer un job
Route::post('/jobs', function () {
    //Validation
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    //Créer le job
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 5
    ]);
    return redirect('/jobs');
});

//Update un job
Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    $job = Job::findOrFail($id);
    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect('jobs/' . $job->id);
});

//Delete un job
Route::delete('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id);
    $job->delete();
    return redirect('/jobs');
});

Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    if (!$job) {
        abort(404);
    }
    return view('jobs.edit', data: ['job' => $job]);
});