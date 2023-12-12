<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StockController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
   

});

require __DIR__.'/auth.php';

Route::get('/add-stocks',[HomeController::class , 'add_stocks']);
Route::get('/manage-stocks',[HomeController::class , 'manage_stocks']);
Route::get('/issue-item',[HomeController::class , 'issue']);
Route::get('/receive-item',[HomeController::class , 'receive']);

Route::resource('items', StockController::class);
Route::resource('stocks', StockController::class);


Route::post('/receive-item', [StockController::class, 'receiveItem']);
Route::post('/issue-item', [StockController::class, 'issueItem']);