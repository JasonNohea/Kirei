<?php

use App\Http\Controllers\TalentController;
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

//Landing Page Utama 
Route::get('/', [TalentController::class,'landing'])->name('landing'); 

//Landing Page Talent 
Route::get('/lp_talent', [TalentController::class,'lp_talent'])->name('lp_talent'); 

//HomePage Talent 
Route::get('/home_talent', [TalentController::class,'home_talent'])->name('home_talent'); 

//About Page
Route::get('/about', [GeneralController::class,'aboutpg'])->name('aboutpg'); 

