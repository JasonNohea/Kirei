<?php

use App\Http\Controllers\TalentController;
use App\Http\Controllers\CompController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ProvinceController;
use App\Models\Skills;
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

//Company -> Talent Profile
Route::get('/companytalentprofile', [CompController::class, 'companyTalentProfile'])->name('companyTalentProfile');

//Testing Form Input Database
Route::get('/tryform', [GeneralController::class, 'cthForm'])->name('cthForm');

//Testing Form Input Database
Route::post('/create', function ($id) {
    $skill = new skills();
    $skill->skill_name = request('skillname');
    $skill->save();
});

use App\Http\Controllers\SkillController;
//Register Company
Route::get('/rgtcompany', [CompController::class, 'rgtComp'])->name('rgtComp');

// Display the form
Route::get('/skills/create', [SkillController::class, 'create'])->name('skills.create');

// Handle the form submission
Route::post('/skills', [SkillController::class, 'store'])->name('skills.store');

// Display the form
Route::get('/provinces/create', [ProvinceController::class, 'create'])->name('provinces.create');

// Handle the form submission
Route::post('/provinces', [ProvinceController::class, 'store'])->name('provinces.store');

// Display the form
Route::get('/cities/create', [CityController::class, 'create'])->name('city.create');

// Handle the form submission
Route::post('/cities', [CityController::class, 'store'])->name('city.store');
