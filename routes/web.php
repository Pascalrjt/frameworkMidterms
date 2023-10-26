<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WatchesController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/watches', [WatchesController::class, 'index'])->middleware('auth');
Route::post('/watches', [WatchesController::class, 'store']);
Route::get('/watches/create', [WatchesController::class, 'create']);
Route::get('/watches/{watchtype}', [Watchesconroller::class, 'show']);
Route::get('/animals/{watchtype}/edit', [Watchesconroller::class, 'edit'])->middleware('App\Http\Middleware\Admin');
Route::put('/animals/{watchtype}', [Watchesconroller::class, 'update']);
Route::delete('/animals/{watchtype}', [Watchesconroller::class, 'destroy'])->middleware('App\Http\Middleware\Admin');

require __DIR__.'/auth.php';
