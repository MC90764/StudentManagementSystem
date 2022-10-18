<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
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

Route::get('/', [HomeController::class, "index"]) ->name('home');



Route::prefix('/dashboard')->group(function(){
    Route::get('/', [StudentController::class, "index"]) ->name('dashboard');
    Route::post('/store', [StudentController::class, "store"]) ->name('dashboard.store');
    Route::get('/{student_id}/delete', [StudentController::class, "destroy"]) ->name('dashboard.destroy');
    Route::get('/{student_id}/activate', [StudentController::class, "activate"]) ->name('dashboard.activate');
    Route::get('/{student_id}/deactivate', [StudentController::class, "deactivate"]) ->name('dashboard.deactivate');
});
