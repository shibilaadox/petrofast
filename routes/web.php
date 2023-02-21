<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\LoginController;

/*

/*
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
    return view('auth.login');
});

Route::post("signin", [LoginController::class, "signin"])->name("signin");


/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboardv1');
})->name('dashboard');*/
Route::get('lang/{locale}', [App\Http\Controllers\LocalizationController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('roles', [RoleController::class, 'index'])->name('roles.index');

Route::middleware(['auth:sanctum', 'verified'])->get('stations', [StationController::class, 'index'])->name('stations.index');

Route::middleware(['auth:sanctum', 'verified'])->get('users', [UserController::class, 'index'])->name('users.index');

Route::middleware(['auth:sanctum', 'verified'])->get('fmrs', [FMRController::class, 'index'])->name('fmrs.index');

Route::middleware(['auth:sanctum', 'verified'])->resource('roles', RoleController::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('question_category', QuestioncategoryController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('question_category', [App\Http\Controllers\QuestioncategoryController::class, 'index'])->name('question_category.index');

Route::middleware(['auth:sanctum', 'verified'])->resource('stations', StationController::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('users', UserController::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('fmrs', FMRController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('ChangeStation', [App\Http\Controllers\UserController::class,'change_station'])->name('ChangeStation'); 

Route::middleware(['auth:sanctum', 'verified'])->get('ChangeSupervisorStation', [App\Http\Controllers\UserController::class,'change_supervisor_station'])->name('ChangeSupervisorStation'); 

Route::middleware(['auth:sanctum', 'verified'])->get('ChooseQuestions', [ App\Http\Controllers\StationController::class,'choose_questions'])->name('ChooseQuestions'); 

Route::middleware(['auth:sanctum', 'verified'])->resource('surveyquestions', SurveyquestionController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('qstn_update', [ App\Http\Controllers\StationController::class,'qstn_update'])->name('qstn_update');

Route::middleware(['auth:sanctum', 'verified'])->resource('issuecategories', IssuecategoryController::class);

Route::middleware(['auth:sanctum', 'verified'])->resource('issuetypes', IssuetypeController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('FMRDetails', [ App\Http\Controllers\FMRController::class,'FMRDetails'])->name('FMRDetails');

Route::middleware(['auth:sanctum', 'verified'])->resource('surveys', SurveyController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('SurveyDetails', [ App\Http\Controllers\SurveyController::class,'SurveyDetails'])->name('SurveyDetails');

Route::middleware(['auth:sanctum', 'verified'])->get('/signout', [LoginController::class, 'signout'])->name("signout");



