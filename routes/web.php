<?php

use App\Http\Controllers\ReadController;
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

Route::get('/dashboard/{readValue}/edit', [ReadController::class, 'edit'] );
Route::post('/dashboard', [ReadController::class, 'addCreate'] );
Route::put('/dashboard/{readValue}', [ReadController::class, 'update'] );
Route::get('/dashboard/create', [ReadController::class, 'create'] );
Route::get('/dashboard/{readValue}', [ReadController::class, 'destroy'] );

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [ReadController::class, 'index']);
