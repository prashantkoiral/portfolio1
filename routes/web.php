<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
// routes/web.php
use App\Models\Profile;
use App\Http\Controllers\ContactController;

Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');

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


Route::get('/',[HomeController::class,'index']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::get('/view_userprofile',[AdminController::class,'view_userprofile']);

Route::post('/add_profile',[AdminController::class,'add_profile']);

Route::get('/view_deleteprofile',[AdminController::class,'view_deleteprofile']);

Route::delete('/delete_profile/{id}', [AdminController::class, 'delete_profile'])->name('delete_profile');


Route::get('/view_education',[AdminController::class,'view_education']);

Route::get('/view_deleteeducation',[AdminController::class,'view_deleteeducation']);//rouute for delete page
Route::delete('/delete_education/{id}', [AdminController::class, 'delete_education'])->name('delete_education');



Route::get('/view_Professional',[AdminController::class,'view_Professional']);

Route::post('/add_education',[AdminController::class,'add_education']);

Route::post('/add_professional',[AdminController::class,'add_professional']);
Route::get('/view_professional_delete',[AdminController::class,'view_professional_delete']);//rouute for delete professional page
Route::delete('/delete_professional/{id}', [AdminController::class, 'delete_professional'])->name('delete_professional');

// edit route

Route::get('/update_profile/{id}', [AdminController::class, 'update_profile'])->name('update_profile');
Route::post('/update_profile_conform/{id}', [AdminController::class, 'update_profile_conform']);
//not working 
Route::get('/update_profession/{id}', [AdminController::class, 'update_profession'])->name('update_profession');
Route::post('/update_profession_conform/{id}', [AdminController::class, 'update_profession_conform'])->name('update_profession_conform');
//url for edit education
Route::get('/update_eduction/{id}', [AdminController::class, 'update_eduction'])->name('update_eduction');
Route::post('/update_education_conform/{id}', [AdminController::class, 'update_education_conform'])->name('update_education_conform');