<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;


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
    Route::get('project/{model}',   [DashboardController::class, 'project_model'])->name('project.model');
    Route::resource('projects', ProjectController::class)->names('projects');

    // sheets route Round
    Route::get('Rec_Duct',      [DashboardController::class, 'Rec_Duct'])->name('Rec.Duct');
    Route::post('RecDuct',      [DashboardController::class, 'RecDuct'])->name('RecDuct');

    Route::get('Round_Duct',    [DashboardController::class, 'Round_Duct'])->name('Round.Duct');
    Route::post('RoundDuct',    [DashboardController::class, 'RoundDuct'])->name('RoundDuct');
    
    Route::get('GetFitting',    [DashboardController::class, 'GetFitting'])->name('GetFitting');
    Route::post('RoundDuct',    [DashboardController::class, 'RoundDuct'])->name('RoundDuct');

    Route::get('Rec_Frame',     [DashboardController::class, 'Rec_Frame'])->name('Rec.Frame');
    Route::post('RecFrame',     [DashboardController::class, 'RecFrame'])->name('RecFrame');
    
    Route::get('Round_Frame',   [DashboardController::class, 'Round_Frame'])->name('Round.Frame');
    Route::post('RoundFrame',   [DashboardController::class, 'RoundFrame'])->name('RoundFrame');

    Route::get('End_Cap_Rec',   [DashboardController::class, 'End_Cap_Rec'])->name('End_Cap_Rec');
    Route::post('EndCapRec',    [DashboardController::class, 'EndCapRec'])->name('EndCapRec');

    Route::get('End_Cap_Round',   [DashboardController::class, 'End_Cap_Round'])->name('End_Cap_Round');
    Route::post('EndCapRound',  [DashboardController::class, 'EndCapRound'])->name('EndCapRound');

    Route::get('Air_outlet_Plenum',   [DashboardController::class, 'Air_outlet_Plenum'])->name('Air_outlet_Plenum');
    Route::post('EndCapRound',  [DashboardController::class, 'EndCapRound'])->name('EndCapRound');

    Route::get('Bell_Mouse',   [DashboardController::class, 'Bell_Mouse'])->name('Bell_Mouse');
    Route::post('BellMouse',  [DashboardController::class, 'BellMouse'])->name('BellMouse');

    
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
