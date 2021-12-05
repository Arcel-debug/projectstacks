<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::get('/jobsearch',                                        function() { return view('jobsearch'); });
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/dashboard',                                        function() { return view('dashboard'); })->name('dashboard');

    // PROFILE CONTROLLER
    Route::get('/profile',                                          [ProfileController::class, 'index']);
    Route::get('/profile/edit_content_one_frm',                     [ProfileController::class, 'edit_content_one_frm']);
    Route::get('/profile/edit_content_two_frm',                     [ProfileController::class, 'edit_content_two_frm']);
});