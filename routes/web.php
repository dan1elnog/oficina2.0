<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BudgetController;


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

Route::get('/budget', [BudgetController::class, 'index'])->name('budget.index');
Route::get('/create', [BudgetController::class, 'create'])->name('budget.create');
Route::get('/show/{id}', [BudgetController::class, 'show'])->name('budget.show');
Route::get('/edit/{id}', [BudgetController::class, 'edit'])->name('budget.edit');
Route::post('/store', [BudgetController::class, 'store'])->name('budget.store');
Route::put('/edit/{id}', [BudgetController::class, 'update'])->name('budget.update');
Route::delete('/destroy/{id}', [BudgetController::class, 'destroy'])->name('budget.destroy');
