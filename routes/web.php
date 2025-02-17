<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',
        ['name' => 'mohammed ben cheikh']
    );
});

Route::get('/about', function () {
    return view('about',
        ['name' => 'omar ben cheikh']
    );
});

route::get('/contact', function () {
    return view('contact' , 
        ['name' => 'saad ben cheikh']
    );
});

route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
             'web developer',
             'web designer',
             'web tester',
             'web manager',
        ]
    ]);
});

route::get('/job/{id}', function ($id) {
    return view('job', [
        'id'=> $id,
        'jobs' => [
             'web developer',
             'web designer',
             'web tester',
             'web manager',
        ]
    ]);
});