<?php

namespace App\Models;


use Illuminate\Support\Arr;

Class Jobs{
    public static function all(){
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
        return $jobs;

    }


    public static function find($id){

        $job = Arr::first(Jobs::all(), fn($job) => $job['id'] === (int) $id);

        if(!$job){
            abort(404);
        }

        return $job;
    }
}

