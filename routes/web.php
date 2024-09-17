<?php

/*
 *	Routes take a url input, and return something something else.
 *	This could be a file, or even a string.
 */
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('jobs', function() {
    return view('jobs',
		[
		'jobs' =>
			[
				[
				'id' => 0,
				'title' => 'Director',
				'salary' => '$50,000'
				],
				[
				'id' => 1,
				'title' => 'Programmer',
				'salary' => '$10,000'
				],
				[
				'id' => 2,
				'title' => 'Teacher',
				'salary' => '$40,000'
				]
			]
		]
	);
});

Route::get('/jobs/{id}', function($id) {
	$jobs = [
		[
		'id' => 0,
		'title' => 'Director',
		'salary' => '$50,000'
		],
		[
		'id' => 1,
		'title' => 'Programmer',
		'salary' => '$10,000'
		],
		[
		'id' => 2,
		'title' => 'Teacher',
		'salary' => '$40,000'
		]
	];

	$job = Arr::first($jobs, fn($job) => $job['id'] == $id);
	
	return view('job', ['job' => $job]);
});

Route::get('/about', function() {
	return view('about');
});

Route::get('/contact', function() {
	return view('contact');
});


