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
Route::get('/', function ()
 {
    return view('welcome');
});

Route::resource('guidance', 'GuidanceController');
Route::post('/import-form', 'GuidanceController@importForm')->name('import.file');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->resource('guidance','GuidanceController');
Route::middleware(['auth:sanctum', 'verified'])->post('/import-form','GuidanceController@importForm')->name('import.file');

//for testing
// Route::get('/test', function ()
//  {
//     return view('sample');
// });