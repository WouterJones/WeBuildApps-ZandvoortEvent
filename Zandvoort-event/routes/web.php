<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntryController;

Route::get('/', function () {
    return view('components.layout');
});

// Store Entry Data
Route::post('/entrys', [EntryController::class, 'store']);