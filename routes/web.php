<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FileController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\AteamController;
use App\Http\Controllers\StudentController;

use App\Models\Student;
use App\Models\Department;
use App\Models\Subject;
use App\Models\Ateam;
use App\Models\Upload;




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

    $students=Student::orderby('id','DESC')->paginate('2');
    $subjects=Subject::orderby('id','DESC')->paginate('2');
    $departments=Department::all();
    $ateams=Ateam::orderby('id','DESC')->paginate('2');
    return view('home',compact('students','subjects','departments','ateams'));
});

Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





//WebApplication Student
Route::get('stu_index',[StudentController::class,'index'])->name('stu_index');
Route::get('stu_create',[StudentController::class,'create'])->name('stu_create');
Route::post('stu_create',[StudentController::class,'store'])->name('stu_store');





//Image/File 
Route::get('/index', [FileController::class, 'index'])->name('index');
Route::get('/create', [FileController::class, 'create'])->name('create');
Route::get('/create', [FileController::class, 'store'])->name('save');



//WebApplication Department
Route::get('/dep_index',[DepartmentController::class, 'index'])->name('dep_index');
Route::post('/dep_create',[DepartmentController::class, 'store'])->name('dep_store');
Route::get('/dep_create',[DepartmentController::class, 'create'])->name('dep_create');



//WebApplication Subject
Route::get('sub_index',[SubjectController::class,'index'])->name('sub_index');
Route::post('sub_create',[SubjectController::class,'store'])->name('sub_store');
Route::get('sub_create',[SubjectController::class,'create'])->name('sub_create');



//WebApplication Subject
Route::get('class_index',[AteamController::class,'index'])->name('class_index');
Route::post('class_create',[AteamController::class,'store'])->name('class_store');
Route::get('class_create',[AteamController::class,'create'])->name('class_create');
