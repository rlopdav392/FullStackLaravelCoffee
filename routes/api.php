<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\AuthController;


Route::middleware('auth:sanctum')->group(function() {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', [AuthController::class, 'logout']);

    //Almacenar ordenes
    Route::apiResource('/pedidos', PedidoController::class );

});
    



Route::apiResource('/categorias',CategoriaController::class);
Route::apiResource('/productos',ProductoController::class);

Route::post('/registro',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);