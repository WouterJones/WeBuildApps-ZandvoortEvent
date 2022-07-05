<?php

use App\Mail\RegistrationSuccesMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntryController;

// Routes 

// Homepage view
Route::get('/', function () {
    return view('components.layout');
});

// Store Entry Data
Route::post('/entries', [EntryController::class, 'store']);

