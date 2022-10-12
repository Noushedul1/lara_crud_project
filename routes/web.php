<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// start for home
Route::get('/', [StudentController::class, 'welcome'])->name('welcome');
// end for home 
// start for students
Route::get('/students', [StudentController::class, 'students'])->name('students');
// end for students 
// start for addstudents 
Route::post('/addstudents', [StudentController::class, 'addstudents'])->name('addstudents');
// end for addstudents 
// start for managestudents 
Route::get('/managestudents', [StudentController::class, 'managestudents'])->name('managestudents');
// end for managestudents 
// start for edit 
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
// end for edit 
// start for update student 
Route::post('/updatestudent/{id}', [StudentController::class, 'updatestudent'])->name('updatestudent');
// end for update student 
// start for delete student 
Route::post('/deletestudent/{id}', [StudentController::class, 'delete'])->name('delete');
// end for delete student 