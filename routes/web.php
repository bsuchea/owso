<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CreateService;
use App\Http\Livewire\EditService;
use App\Http\Controllers\ServiceController;

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

Route::middleware(['auth:sanctum', 'verified'])->group(function(){

    Route::get('/dashboard', \App\Http\Livewire\Dashboard::class )->name('dashboard');
    Route::view('/services', 'livewire.service.data' )->name('services');
    Route::get('/service/create', CreateService::class )->name('service.create');
    Route::get('/service/{id}/edit', EditService::class )->name('service.edit');

    Route::get('/service/{id}', [ServiceController::class, 'printLic'] )->name('service.print');
    Route::get('/service/{id}/dis', [ServiceController::class, 'printDis'] )->name('service.dis');

});

