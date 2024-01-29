<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/produto', [ProdutoController::class,'index']);
Route::get('/produto/{id}', [ProdutoController::class,'show']);
Route::post('/produto', [ProdutoController::class,'store']);

Route::get('/venda', [VendaController::class, 'index']);
Route::get('/venda/{id}', [VendaController::class, 'show']);
Route::post('/venda', [VendaController::class, 'store']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
