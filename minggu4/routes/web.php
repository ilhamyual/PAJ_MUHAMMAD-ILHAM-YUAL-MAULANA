<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TaskController;


Route::get('/task', [TaskController::class, 'index']);
Route::get('/task/create', [TaskController::class, 'create']);
Route::post('/task/store', [TaskController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/voter', [VoterController::class, 'viewVoter']);

Route::get('/subjectstudent', [SubjectController::class, 'viewsubjectstudent']);
Route::get('/subjectteacher', [SubjectController::class, 'viewsubjectteacher']);
Route::get('/subjectadmin', [SubjectController::class, 'viewsubjectadmin']);

Route::get('/userstudent', [UserController::class, 'viewuserstudent']);
Route::get('/userteacher', [UserController::class, 'viewuserteacher']);
Route::get('/useradmin', [UserController::class, 'viewuseradmin']);