<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/jobs', function (){
    return view('jobs', [
        'jobs' =>[

            [
                'id' => 1,
                'Title' => 'Director',
                'Salary' => '$20,000',
            ],
            [
                'id' => 2,
                'Title' => 'Developer',
                'Salary' => '$40,000',
            ],
            [   'id' => 3,
                'Title' => 'Designer',
                'Salary' => '$50,000',
            ],
            [
                'id' => 4,
                'Title' => 'Programmer',
                'Salary' => '$60,000',
            ],

        ]
    ]);
})->name('jobs');

Route::get('/jobs/{id}', function ($id){

    $jobs = [
        [
            'id' => 1,
            'Title' => 'Director',
            'Salary' => '$20,000',
        ],
        [
            'id' => 2,
            'Title' => 'Developer',
            'Salary' => '$40,000',
        ],
        [   'id' => 3,
            'Title' => 'Designer',
            'Salary' => '$50,000',
        ],
        [
            'id' => 4,
            'Title' => 'Programmer',
            'Salary' => '$60,000',
        ],

    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] === (int) $id);

    return view('job', ['job' => $job]);

})->name('job');

Route::get('/about', function (){
    return view('about');
})->name('about');







