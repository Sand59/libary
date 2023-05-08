<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubscriptionController;

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

Route::get('/', [BookController::class, 'index'])->name('home');
Route::post('/subscription/{id}', [SubscriptionController::class, 'update'])->name('subscription.update')->middleware('auth');;

Route::get('/mybooks', [BookController::class, 'myBooks'])->name('mybooks')->middleware('auth');
Route::post('/mybooks/{book}/renew', [BookController::class, 'renew'])->name('mybooks.renew')->middleware('auth');
Route::post('/mybooks/{book}/cancel', [BookController::class, 'cancel'])->name('mybooks.cancel')->middleware('auth');

Route::resource('/message', \App\Http\Controllers\MessageController::class);

Route::view('/select', 'select')->name('select');
Route::get('/select/email', [BookController::class, 'select'])->name('select.email');
Route::get('/select/{id}', [BookController::class, 'selectId'])->name('select.id')->middleware('auth');
Route::post('/select/{id}/book/{book}/lent', [BookController::class, 'lent'])->name('select.lent')->middleware('auth');
Route::post('/select/{id}/book/{book}/cancel', [BookController::class, 'selectCancel'])->name('select.cancel')->middleware('auth');
Route::post('/select/{id}/book/{book}/return', [BookController::class, 'return'])->name('select.return')->middleware('auth');
Route::post('/select/{id}/book/{book}/renew', [BookController::class, 'selectRenew'])->name('select.renew')->middleware('auth');

Route::get('/books/{book}', [BookController::class, 'show'])->name('books');
Route::post('/books/{book}', [BookController::class, 'reserved'])->name('books.reserved')->middleware('auth');

require __DIR__.'/auth.php';



Route::get('/test', [TestController::class, 'test'])->name('test');
