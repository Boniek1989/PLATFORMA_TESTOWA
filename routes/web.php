<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminQuestController;


Route::get('/', function () {return view('index');
});

Route::get('/admin_auth', [AdminController::class,'Admin']);
Route::post('/admin_auth_control', [AdminController::class,'AdminControl']);

Route::get('/add_quest', function(){return view('QuestAdd');
});

Route::post('/question_add', [AdminController::class,'AddQuizQuest']);
Route::post('/question_edit', [AdminController::class,'AddQuizQuest']);