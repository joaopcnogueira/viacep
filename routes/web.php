<?php

use App\Http\Controllers\APIController;
use Illuminate\Support\Facades\Route;

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

Route::get('/request-form', [APIController::class, 'show_form'])->name('api.form');
Route::post('/request', [APIController::class, 'request'])->name('api.request');

Route::get('/', function() {
    // return view('welcome');
    return redirect()->route('api.form');
});
