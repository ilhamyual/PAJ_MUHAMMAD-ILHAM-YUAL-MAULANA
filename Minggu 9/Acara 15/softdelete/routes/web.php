<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\GuruController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru/hapus/{id}', [GuruController::class, 'hapus']);
Route::get('/guru/trash', [GuruController::class, 'trash']);
Route::get('/guru/kembalikan_semua', [GuruController::class, 'kembalikan_semua']);
Route::get('/guru/restore/{id}', [GuruController::class, 'restore']);
Route::get('/guru/hapus_permanen/{id}', [GuruController::class, 'hapus_permanen']);
Route::get('/guru/hapus_permanen_semua', [GuruController::class, 'hapus_permanen_semua']);



Route::get('/upload', [UploadController::class, 'upload']);
Route::post('/upload/proses', [UploadController::class, 'proses_upload']);
Route::delete('/upload/hapus/{id}', [UploadController::class, 'hapus']);

Route::middleware(['auth','is_admin'])->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'showDashboard'])->name('admin.dashboard');
});

Route::middleware(['auth','is_doctor'])->group(function(){
    Route::get('/doctor/dashboard',[DoctorController::class,'showDashboard'])->name('doctor.dashboard');
});

Route::middleware(['auth','is_patient'])->group(function(){
    Route::get('/patient/dashboard',[PatientController::class,'showDashboard'])->name('patient.dashboard');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/task', [TaskController::class, 'index']);
// Route::get('/task/create', [TaskController::class, 'create']);
// Route::post('/task/store', [TaskController::class, 'store']);

// Route::get('/task/{task}', [TaskController::class, 'show']);
// Route::get('/task/{task}/edit', [TaskController::class, 'edit']);
// Route::put('/task/{task}', [TaskController::class, 'update']);
// Route::delete('/task/{task}' ,[TaskController::class, 'delete']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/voter', [VoterController::class, 'viewVoter']);

// Route::get('/subjectstudent', [SubjectController::class, 'viewsubjectstudent']);
// Route::get('/subjectteacher', [SubjectController::class, 'viewsubjectteacher']);
// Route::get('/subjectadmin', [SubjectController::class, 'viewsubjectadmin']);

// Route::get('/userstudent', [UserController::class, 'viewuserstudent']);
// Route::get('/userteacher', [UserController::class, 'viewuserteacher']);
// Route::get('/useradmin', [UserController::class, 'viewuseradmin']);



