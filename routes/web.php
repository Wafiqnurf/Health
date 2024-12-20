<?php
use App\Http\Controllers\CatatanController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/catatan', [CatatanController::class, 'index'])->name('catatan')->middleware('auth');
Route::get('/catatan/create', [CatatanController::class, 'create'])->name('catatan.create')->middleware('auth');
Route::post('/catatan', [CatatanController::class, 'store'])->name('catatan.store')->middleware('auth');
Route::post('/catatan/destroy/{id}', [CatatanController::class, 'destroy'])->name('catatan.destroy')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
