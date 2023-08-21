<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// generalized CRUD api
Route::get("/crud/{table}", function ($table) {
    return response()->json(DB::table($table)->get(), 200);
});

Route::get("/crud/{table}/{id}", function ($table, $id) {
    return response()->json(DB::table($table)->find($id), 200);
});

Route::post("/crud/{table}", function (Request $request, $table) {
    $data = $request->all();
    $newRecord = DB::table($table)->insert($data);
    return response()->json($newRecord, 201);
});

Route::put("/crud/{table}/{id}", function (Request $request, $table, $id) {
    $data = $request->all();
    $updated = DB::table($table)->where('id', $id)->update($data);
    if ($updated) {
        return response()->json($updated, 200);
    } else {
        return response()->json(['message' => 'Record not found'], 404);
    }
});

Route::delete("/crud/{table}/{id}", function ($table, $id) {
    $deleted = DB::table($table)->where('id', $id)->delete();
    if ($deleted) {
        return response()->json(['message' => 'Record deleted'], 200);
    } else {
        return response()->json(['message' => 'Record not found'], 404);
    }
});
