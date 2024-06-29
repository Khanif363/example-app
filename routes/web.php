<?php

use App\Http\Controllers\DefaultController;
use App\Http\Middleware\CheckMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



// Route::match(['get', 'post'], '/', function () {
//     return 'Hello World';
//     // Route::get('/', function () {
//     //     return 'Hello World';
//     // });
// });

// Route::any('/register', function () {
//     return 'Hello World';
// });


// Route::get('/', function (Request $request) {
//     // Log::info($request);
//     return view('new.welcome', ['nama' => '<i>Peserta Training</i>']);
// });

// Route::get('/increment/{number}', [DefaultController::class, 'increment'])->middleware(CheckMethod::class);
// Route::get('/increment/{number}', [DefaultController::class, 'increment']);

Route::resource('increment', DefaultController::class);
