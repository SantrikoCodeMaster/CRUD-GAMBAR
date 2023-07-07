<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TokoController::class, 'showindex']);

Route::get('/add', [TokoController::class, 'showadd']);
Route::post('/create', [TokoController::class, 'create']);

Route::get('/edit/{id}', [TokoController::class, 'showedit']);
Route::post('/edits', [TokoController::class, 'edit']);

route::get('/delete/{id}', [TokoController::class,'destroy']);

// route::get('/pesan', [MahasiswaController::class, 'index']);
// route::get('/get-pesan', [MahasiswaController::class,'pesan']);

// route::get('/mk', [MatakuliahController::class,'showindex']);
// route::get('/mk-add', [MatakuliahController::class,'showadd']);
// route::post('/mk-add', [MatakuliahController::class,'add']);

// route::get('/mk-edit/{id}', [MatakuliahController::class,'showedit']);
// route::post('/mk-edits', [MatakuliahController::class,'edit']);
// route::get('/mk-delete/{id}', [MatakuliahController::class,'destroymk']);