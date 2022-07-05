<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntryController;

// Homepage view
Route::get('/', function () {
    return view('components.layout');
});

// Store Entry Data
Route::post('/entrys', [EntryController::class, 'store']);