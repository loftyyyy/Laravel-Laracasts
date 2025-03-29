<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/jobs', function (){
    return view('jobs', [
        'jobs' =>[
            [   'Title' => 'Director',
                'Salary' => '$20,000',
            ],
            [   'Title' => 'Developer',
                'Salary' => '$40,000',
            ],
            [   'Title' => 'Designer',
                'Salary' => '$50,000',
            ],
            [   'Title' => 'Programmer',
                'Salary' => '$60,000',
            ],

        ]
    ]);
})->name('jobs');

Route::get('/about', function (){
    return view('about');
})->name('about');







