<?php
use App\Http\Controllers\PenggunaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// route::get('/index', [PenggunaController::class, 'indexApi']);
// route::get('/index/{id}', [PenggunaController::class, 'showApi']);
// route::post('/pengguna/store', [PenggunaController::class, 'storeApi']);
// route::delete('/pengguna/{id}', [PenggunaController::class, 'destroy']);