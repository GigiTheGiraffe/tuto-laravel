<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;

Route::get('/', function () {
    dd($jobs = Job::all());
    return view('home');
});

Route::get('jobs', function () {
    return view('jobs', data: ['jobs' => Job::getAll()]);
});

Route::get('jobs/{title}', function ($title) {
        $job = Job::find($title);
    return view('job', data: ['job' => $job]);
});

Route::get('contact', function () {
    return view('contact');
});
