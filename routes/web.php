<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\GenerateController;

Route::get('/generate', [GenerateController::class, 'show']);
Route::post('/generate', [GenerateController::class, 'generate'])->name('generate');
Route::post('/generate-many1', [GenerateController::class, 'generateMany'])->name('generate.many');

#secretfound