<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('jobs', function () {
    $jobs = Job::with('employer')->simplePaginate(5);
    return view('jobs', ['jobs' => $jobs]);
});

Route::get('jobs/{id}', function ($id) {
        $job = Job::find($id);
        if(!$job) {
            abort(404);
        }
    return view('job', data: ['job' => $job]);
});

Route::get('contact', function () {
    return view('contact');
});
