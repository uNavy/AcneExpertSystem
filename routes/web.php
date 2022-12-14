<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PertanyaanController;

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
    return view('welcome');
})->name('welcome');

Route::get('/start', function () {
    session_start();
    $_SESSION['current_gejala'] = "GE01";
    return redirect('/pertanyaan');
});

Route::get('pertanyaan', [PertanyaanController::class, 'display']);

Route::post('answer', [PertanyaanController::class, 'next'])->name('answer');

Route::get('/team', function () {
    return view('team');
});

Route::get('/notfound', function () {
    return view('notfound');
});
