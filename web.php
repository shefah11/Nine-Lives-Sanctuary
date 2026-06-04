<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

// Member 2 Core Infrastructure Routes
Route::resource('reports', ReportController::class);