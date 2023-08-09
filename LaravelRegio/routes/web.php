<?php

use App\Http\Controllers\TalentController;
use App\Http\Controllers\CompController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ProvinceController;
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
Route::get('/', [TalentController::class, 'landing'])->name('landing');

//Landing Page Talent 
Route::get('/lp_talent', [TalentController::class, 'lpTalent'])->name('lpTalent');

//HomePage Talent 
Route::get('/home_talent', [TalentController::class, 'homeTalent'])->name('homeTalent');

//About Talent Page
Route::get('/aboutTalent', [GeneralController::class, 'aboutTalent'])->name('aboutTalent');

//About Company Page
Route::get('/aboutComp', [GeneralController::class, 'aboutComp'])->name('aboutComp');

//HomePage Company
Route::get('/hpCompany', [CompController::class, 'hpCompany'])->name('hpCompany');

//HomePage Company and login
Route::post('/hpCompanylog', [CompController::class, 'hpCompanylog'])->name('hpCompanylog');

//Company Project
Route::get('/compProject', [CompController::class, 'compProject'])->name('compProject');

//Post Project
Route::get('/jobpost', [CompController::class, 'jobPosting'])->name('jobPosting');

//Detail Project Company
Route::get('/cpdetailproject', [CompController::class, 'projectDetail'])->name('projectDetail');

//Detail Job Talent
Route::get('/dtltalent', [TalentController::class, 'detailJob'])->name('detailJob');

//Company Profile
Route::get('/companyprofile', [CompController::class, 'companyProfile'])->name('companyProfile');

//Register Company
Route::get('/rgtcomp', [CompController::class, 'rgtComp'])->name('registercompany');

//Company -> Talent Profile
Route::get('/companytalentprofile', [CompController::class, 'companyTalentProfile'])->name('companyTalentProfile');

//Handle Register Company Form
Route::get('/users/createComp', [CompController::class, 'createCompany'])->name('createCompany');

//Register Company
Route::post('/users', [CompController::class, 'store'])->name('users.store');
