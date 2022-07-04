<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntryController;

// Homepage view
Route::get('/', function () {
    return view('components.layout');
});

// get all Entrys
Route::get('/', [EntryController::class, '_counter']);

// Store Entry Data
Route::post('/entrys', [EntryController::class, 'store']);