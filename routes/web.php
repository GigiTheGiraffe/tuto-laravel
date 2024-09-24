<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('jobs', function () {
    return view('jobs', [
        'jobs' => [[
            'title' => 'Director',
            'salary' => '50000€'
        ],
        [
            'title' => 'Janitor',
            'salary' => '20000€'
        ],
        [
            'title' => 'Programmer',
            'salary' => '30000€'
        ]
    ]]);
});

Route::get('jobs/{title}', function ($title) {
    $jobs = [
        [
            'title' => 'Director',
            'salary' => '50000€'
        ],
        [
            'title' => 'Janitor',
            'salary' => '20000€'
        ],
        [
            'title' => 'Programmer',
            'salary' => '30000€'
        ]
    ];
        $job = Arr::first($jobs, fn($job) => $job['title'] == $title);
    return view('job', ['job' => $job]);
});

Route::get('contact', function () {
    return view('contact');
});
