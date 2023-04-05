<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckUrlController;

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
    echo "amera";
});



Route::get('checkUrl', [CheckUrlController::class, 'urlForm'])->name('url');
Route::post('checkUrl', [CheckUrlController::class, 'checkUrl'])->name('url.checkUrl');