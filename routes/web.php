<?php

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

Route::get('/', function () {
    return redirect('totalMeasuredValues');
});

Route::get('/totalMeasuredValues', [App\Http\Controllers\ReportController::class, 'totalMeasuredValues']);
Route::get('/sortimentValues', [App\Http\Controllers\ReportController::class, 'sortimentValues']);
Route::get('/valuesByDate', [App\Http\Controllers\ReportController::class, 'valuesByDate']);
Route::get('/filter', [App\Http\Controllers\ReportController::class, 'valuesByDate']);
