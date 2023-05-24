<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
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
//Route to implement the language change
Route::get('lang', [LangController::class, 'index']);
Route::get('lang/', [LangController::class, 'change'])->name('changeLang');


Route::get('/', function () {
    return view('layout.app');
});
