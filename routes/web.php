<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\GraniteTileController;
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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

// All GraniteTile Products
Route::get('/', [GraniteTileController::class, 'index']);

// Show create form
Route::get('/granite-tiles/create', [GraniteTileController::class, 'create']);

// create new GraniteTile
Route::post('/granite-tiles', [GraniteTileController::class, 'store']);

// show single GraniteTile
Route::get('/granite-tiles/{graniteTile}', [GraniteTileController::class, 'show']);

// Remove GraniteTile
Route::delete('/granite-tiles/{graniteTile}', [GraniteTileController::class, 'destroy']);

// show edit form for GraniteTile
Route::get('/granite-tiles/{graniteTile}/edit', [GraniteTileController::class, 'edit']);

// Update GraniteTile
Route::put('/granite-tiles/{graniteTile}', [GraniteTileController::class, 'update']);


// Go to a calculator page with data from specific GraniteTile
Route::get('/calculator/{graniteTile}', [CalculatorController::class, 'index']);

// post calculator form data
Route::post('/calculator/{graniteTile}', [CalculatorController::class, 'calculate']);
