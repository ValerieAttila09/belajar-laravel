<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoutingController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/{name}/home', [RoutingController::class, 'index']);
Route::get('/{name}/posts/create', [RoutingController::class, 'create']);
Route::post('/{name}/posts/store', [RoutingController::class, 'store']);
Route::get('/{name}/posts/{id}/edit', [RoutingController::class, 'edit']);
Route::put('/{name}/posts/{id}', [RoutingController::class, 'update']);
Route::delete('/{name}/posts/{id}', [RoutingController::class, 'destroy']);

?>