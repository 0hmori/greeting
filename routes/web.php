<?php

use App\Http\Controllers\RandomController;
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

//単純なあいさつ
Route::get('/comments/morning', function () {
    return '<h1>朝のあいさつ</h1>' . PHP_EOL . '<h2>おはようございます</h2>';
});

Route::get('/comments/afternoon', function () {
    return '<h1>昼のあいさつ</h1>' . PHP_EOL . '<h2>こんにちは</h2>';
});

Route::get('/comments/evening', function () {
    return '<h1>夕方のあいさつ</h1>' . PHP_EOL . '<h2>こんばんは</h2>';
});

Route::get('/comments/night', function () {
    return '<h1>夜のあいさつ</h1>' . PHP_EOL . '<h2>おやすみ</h2>';
});

//単純なあいさつ
Route::get('/comments/freeword/{msg}', function ($msg) {
    return view('message.freeword', ['msg' => $msg]);
});

//ランダムなメッセージ
Route::get('/comments/random', [RandomController::class, 'random']);
