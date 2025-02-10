<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

# Index routes

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::view('/user', 'index.user');

# Profile

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/profile/{id}', function($id) {

    $user = DB::table('users')->where('id', $id)->first();

    return view('index.profile', ['id' => $id, 'user' => $user]);
})->name('profile.show');

# Posts

Route::controller(PostController::class)->group(function () {
    Route::get('/post/upload', 'create')->middleware(['auth', 'verified']);
    Route::post('/post/upload', 'store')->middleware(['auth', 'verified']);
});

require __DIR__.'/auth.php';
