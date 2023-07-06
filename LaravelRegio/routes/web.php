<?php

use App\Http\Controllers\TalentController;
use App\Http\Controllers\CompController;
use App\Http\Controllers\GeneralController;
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
Route::get('/lp_talent', [TalentController::class,'lpTalent'])->name('lpTalent'); 

//HomePage Talent 
Route::get('/home_talent', [TalentController::class,'homeTalent'])->name('homeTalent'); 

//About Page
Route::get('/about', [GeneralController::class,'aboutpg'])->name('aboutpg'); 

//HomePage Company
Route::get('/hpCompany', [CompController::class,'hpCompany'])->name('hpCompany'); 

//Detail Job Talent
Route::get('/dtltalent', [TalentController::class,'detailJob'])->name('detailJob'); 