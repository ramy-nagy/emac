<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;


use App\Http\Controllers\RecDuctController;
use App\Http\Livewire\RecDuct;

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


require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    // Route::get('dashboard/recduct/{id}', [DashboardController::class, 'recduct'])->name('recduct');
    
    
    // Route::get('/dashboard/recduct/{id}', RecDuct::class);//->name('recduct');
    Route::get('project',   [DashboardController::class, 'project'])->name('project');
    Route::get('dashboard/{model}/export/{id}',    [DashboardController::class, 'export'])->name('export');
    
    // projects
    Route::get('/projects', function () {
        return view('projects');
    });

    // sheets route
    Route::post('RecDuct',      [DashboardController::class, 'RecDuct'])->name('RecDuct');
    Route::post('RoundDust',    [DashboardController::class, 'RoundDust'])->name('RoundDust');
    Route::post('RecFrame',     [DashboardController::class, 'RecFrame'])->name('RecFrame');
    Route::post('RoundFrame',   [DashboardController::class, 'RoundFrame'])->name('RoundFrame');
    Route::post('EndCapRec',    [DashboardController::class, 'EndCapRec'])->name('EndCapRec');
    Route::post('EndCapRound',  [DashboardController::class, 'EndCapRound'])->name('EndCapRound');

    // profile for users
    Route::get('profile',  [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile',  [ProfileController::class, 'update'])->name('profile.update');

    // setting 
    Route::get('settings', [UserController::class, 'settings'])->name('settings');
    Route::POST('settings', [UserController::class, 'settings_store'])->name('settings.store');


    Route::view('about', 'about')->name('about');

    // admins 
    Route::get('admin/dashboard', [UserController::class, 'admin'])->name('admin.dashboard');

    // resource for dashboard
    Route::get('dashboard/{model}/delete/{id}',[DashboardController::class, 'delete'])->name('delete');
    Route::resource('dashboard', DashboardController::class)->names('dashboard');
    
    //Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    //Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    //Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    
});
