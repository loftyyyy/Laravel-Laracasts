<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Jobs;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Jobs::all()->toArray()]);
})->name('jobs');

Route::get('/jobs/{id}', function ($id){

    return view('job', ['job' => Jobs::find($id)]);

})->name('job');

Route::get('/about', function (){
    return view('about');
})->name('about');







