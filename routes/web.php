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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\ItemController;
Route::get('/items', [ ItemController::class, 'index' ]);
Route::post('/items', [ ItemController::class, 'store' ]);
Route::delete('/items/{id}/', [ ItemController::class, 'destroy' ]);
Route::get('/items/{id}/edit', [ ItemController::class, 'edit' ]);
Route::patch('/items/{id}', [ ItemController::class, 'update' ]);




