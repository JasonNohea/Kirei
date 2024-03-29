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

//About Company Page
Route::get('/aboutCompLog', [GeneralController::class, 'aboutCompLog'])->name('aboutCompLog');

//HomePage Company
Route::get('/hpCompany', [CompController::class, 'hpCompany'])->name('hpCompany');

//HomePage Company without modal
Route::get('/hpComplog', [CompController::class, 'hpcomp'])->name('hpComplog');

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

//Register Talent
Route::get('/rgttalent', [TalentController::class, 'createTalent'])->name('createTalent');

//Register Company
Route::post('/usersT', [TalentController::class, 'store'])->name('usersT.store');

//Company -> Talent Profile
Route::get('/companytalentprofile', [CompController::class, 'companyTalentProfile'])->name('companyTalentProfile');

//CompanyLog -> Talent Profile
Route::get('/companylogtalentprofile', [CompController::class, 'companylogTalentProfile'])->name('companylogTalentProfile');

//Handle Register Company Form
//Route::get('/users/createComp', [CompController::class, 'createCompany'])->name('createCompany');

//Register Company
Route::post('/usersC', [CompController::class, 'store'])->name('usersC.store');
