<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use Illuminate\Http\Controllers\StudentsController;
=======
use Illuminate\Http\Controllers\SiswaC;
use Illuminate\Http\Controllers\PerpustakaanController;
>>>>>>> 3356085 (first commit)

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

<<<<<<< HEAD
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
=======
Route::get('siswa',[SiswaC::class ,'index']);
Route::post('siswa/store',[SiswaC::class ,'store']);
Route::get('siswa/show/{id}',[SiswaC::class ,'show']);
Route::post('siswa/update/{id}',[SiswaC::class ,'update']);
Route::get('siswa/destroy/{id}',[SiswaC::class ,'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/siswa', [SiswaC::class, 'index']);
>>>>>>> 3356085 (first commit)
