<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskAssignController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\WorkplaceController;
use App\Http\Controllers\ClientController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/{any?}', function () {
    return view('app');
})->where('any', '^(?!login|register|employee$).*');

Route::prefix('employee')->group(function() {
    Route::get('/', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('/create', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/edit/{employee}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::post('/edit/{employee}', [EmployeeController::class, 'update'])->name('employee.update');
});


require __DIR__.'/auth.php';
