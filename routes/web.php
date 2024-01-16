<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminQuestController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {return view('index');
});
Route::get("/show_all",[AdminController::class,'ShowAll']);
Route::post('/admin_auth_control', [AdminController::class,'AdminControl']);
Route::post('/question_add', [AdminController::class,'AddQuizQuest']);
Route::get('/edit/{id}', [AdminController::class, 'edit']);
Route::put('/update_question/{id}', [AdminController::class, 'update']);
Route::get('/exit_edit', function(){return view('Admin');});
Route::DELETE('/delete/{id}',[AdminController::class, 'destroy']);





Route::post('/create_score', [StudentController::class,'Create']);
Route::get("/test_run",[AdminController::class,'TestRun']);
Route::get('/score_list', [StudentController::class,'ShowAll']);