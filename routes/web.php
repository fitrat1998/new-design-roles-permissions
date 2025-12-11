<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ClientTypeController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\DurationTypeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IpotekaTypeController;
use App\Http\Controllers\LessorController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PriceCategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyConditionController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertySeekingController;
use App\Http\Controllers\PropertyTypeController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TradingTypeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');

    Route::resource('roles', RoleController::class);

    Route::resource('permissions', PermissionController::class);

    Route::resource('users', UserController::class);


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/generate-token', function () {
        $user = \App\Models\User::find(1);
        $token = $user->createToken('MyToken')->plainTextToken;
        return response()->json(['token' => $token]);
    });


});

require __DIR__ . '/auth.php';
