<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\SurveyController;
use App\Http\Controllers\API\FMRController;
use App\Http\Controllers\API\StationController;
use App\Http\Controllers\API\CommonController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group( function () {
    
    Route::get('survey_stations', [SurveyController::class, 'survey_stations']); 
    
    Route::get('survey_questions', [SurveyController::class, 'survey_questions']);
    
    Route::get('survey_count', [SurveyController::class, 'survey_count']);

    Route::post('add_survey', [SurveyController::class, 'add_survey']);
    
    Route::get('completed_survey', [SurveyController::class, 'completed_survey']);

    Route::get('issue_type', [FMRController::class, 'issue_type']);

    Route::get('issue_category', [FMRController::class, 'issue_category']);

    Route::get('fmr_stations', [FMRController::class, 'fmr_stations']);

    Route::post('add_fmr', [FMRController::class, 'add_fmr']);

    Route::get('fmr_count', [FMRController::class, 'fmr_count']);

    Route::get('fmr_status', [FMRController::class, 'fmr_status']);

    Route::get('fmr_manager_employee_home', [FMRController::class, 'fmr_manager_employee_home']);
    
    Route::get('fmr_manager_employee_home_count', [FMRController::class, 'fmr_manager_employee_home_count']);
    
    Route::get('fmr_manager_employee_home_count', [FMRController::class, 'fmr_manager_employee_home_count']);
    
    Route::get('assign_employee', [FMRController::class, 'assign_employee']);
    
    Route::get('employee_list', [FMRController::class, 'employee_list']);
    
    Route::get('change_status', [FMRController::class, 'change_status']);
    
    Route::get('assigned_stations', [StationController::class, 'assigned_stations']);
    
    Route::get('completed_fmr', [FMRController::class, 'completed_fmr']);
    
    Route::post('upload_image', [CommonController::class, 'upload_image']);
    
    Route::get('search_fmr', [FMRController::class, 'search_fmr']);
    
    Route::get('forgot_password', [AuthController::class, 'forgot_password']);
    
    Route::get('get_report', [CommonController::class, 'get_report']);

});










