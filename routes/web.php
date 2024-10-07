<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('custom-login', [AuthController::class, 'index'])->name('custom-login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('custom-dashboard', [AuthController::class, 'dashboard'])->name('custom-dashboard'); 
Route::get('custom-logout', [AuthController::class, 'logout'])->name('custom-logout');

Route::get('home', [DataController::class, 'index'])->name('home');
