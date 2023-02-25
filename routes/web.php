<?php

use Illuminate\Support\Facades\Route;
use  \App\Http\Controllers\MachinesController;


// Route::get('/', [MachinesController::class, "index"]);
// Route::get('/create', [MachinesController::class, "create"]);
// Route::post('/create-machine', [MachinesController::class, "store"]);


Route::resource("machines", MachinesController::class);
