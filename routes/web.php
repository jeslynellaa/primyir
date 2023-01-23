<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\CreateUserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\HomeController;

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
    return redirect()->route('home');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ============ EDIT PROFILE ROUTES ==============
        //Address Dropdown Routes
    Route::get('regions', [ProfilesController::class, 'getRegions'])->name('regions');
    Route::get('provinces', [ProfilesController::class, 'getProvinces'])->name('provinces');
    Route::get('cities', [ProfilesController::class, 'getCities'])->name('cities');
    Route::get('barangays', [ProfilesController::class, 'getBarangays'])->name('barangays');


        // ============ Profile Routes ============
    Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/info/{user}', [ProfilesController::class, 'updateInfo'])->name('profile.updateInfo');
        // ============ Address Routes ============
    Route::patch('/profile/address/{user}', [ProfilesController::class, 'updateAddress'])->name('profile.updateAddress');


    // ============ CHANGE PASSWORD ROUTES ==============
    Route::get('/pw/{user}/edit', [ChangePasswordController::class, 'edit'])->name('pw.edit');
    Route::patch('/pw/{user}', [ChangePasswordController::class, 'update'])->name('pw.update');


// ======= Admin - FACULTY ROUTES ===========

Route::get('/faculty', [FacultyController::class, 'index'])->name('faculty.index');
Route::post('/faculty', [FacultyController::class, 'store'])->name('faculty.store');
Route::get('/faculty/create', [FacultyController::class, 'create'])->name('faculty.create');
Route::patch('/faculty/{user}', [ProfilesController::class, 'update'])->name('faculty.update');