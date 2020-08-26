<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});

//create a user route
Route::post('/user-create', function (Request $request) {
    App\User::create([
        'name' => 'Chris on Code',
        'email' => 'csevilleja@digitalocean.com',
        'password' => Hash::make('mysuperdupersecretpassword'),
    ]);
});

//login a user
Route::post('/login', function () {
    $credentials = [ 
        'email' => 'csevilleja@digitalocean.com',
        'password' => 'mysuperdupersecretpassword'
    ];

    $credentials = request()->only(['email', 'password']);

    $token = auth()->attempt($credentials);

    return $token;
});

//get authenticated user
Route::middleware('auth')->get('/me', function () {
    $user = auth()->user();
    return $user;
}

);

//logout a user




