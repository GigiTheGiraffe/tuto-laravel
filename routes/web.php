<?php

use Illuminate\Support\Facades\Route;

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

Route::get('contact', function () {
    return view('contact');
});
