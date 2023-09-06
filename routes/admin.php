<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllStudentsController;




// Start Admin
Route::get('/dash', [AllStudentsController::class, 'index']);
// End Admin
