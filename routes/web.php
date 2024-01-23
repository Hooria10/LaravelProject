<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/main', [NotesController::class, 'shownotes'])->name('n.main');
Route::get('/addnote', [NotesController::class, 'addnote'])->name('n.add');
Route::post('/main', [NotesController::class, 'store'])->name('n.store');
Route::get('/{note}/edit', [NotesController::class, 'edit'])->name('n.edit');
Route::put('/{note}/update', [NotesController::class, 'update'])->name('n.update');
Route::delete('/{note}/delete', [NotesController::class, 'delete'])->name('n.delete');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

