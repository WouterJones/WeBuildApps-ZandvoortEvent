<?php

use App\Mail\RegistrationSuccesMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\RdwController;

// Routes 

// Landing Page Registration From View
Route::get('/', [EntryController::class, 'viewRegForm']);

// Landing Page Winnerslist View
Route::get('/winners', [EntryController::class, 'viewWinners']);

// Store Entry Data
Route::post('/entries', [EntryController::class, 'store']);

// RDW data check
// Route::get('/data',[RdwController::class, 'fetchNumberPlate']);

