<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Projects\ProjectController;
use App\Http\Controllers\Contact\ContactController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/spa{any}', 'spa')->where('any', '.*'); // Lets open SPA routed links

Route::get('/', [WelcomeController::class, 'index'])->name('index');

Route::prefix('/projects')->name('projects.')->group(function () {
    Route::get('/', [ProjectController::class, 'index'])->name('index');
    Route::get('/{project}/show', [ProjectController::class, 'show'])->name('show');
});

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
