<?php

use App\Http\Controllers\PersonneController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::get("/", [PersonneController::class, "index"]);
Route::get("/profil/{id}", [PersonneController::class, "profil"]);
Route::get("/add-person", [PersonneController::class, "toAddPerson"]);
Route::post("/create", [PersonneController::class, "create"]);
Route::get("/delete/{id}", [PersonneController::class, "delete"]);
Route::post("/update/{id}", [PersonneController::class, "update"]);
