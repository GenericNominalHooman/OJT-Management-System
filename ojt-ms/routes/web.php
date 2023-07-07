<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PendingController;

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

Route::get('/', function () {
    return view('welcome');
})->name('index');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/old', function () {
    return view('landing');
});


Route::get('/login', function () {
    return view('auth/login');
})->middleware('guest');

// Route::middleware(['auth', 'role'])->group(function () {
//     Route::get('/dashboard/student', 'DashboardController@student')->name('dashboard.student');
// });


Route::get('/register', function () {
    return view('auth/register');
})->middleware('guest');

Route::post('/register', [App\Http\Controllers\UserController::class, 'addUser'])->name('register');
Route::post('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');

Route::get('/first', function () {
    return view('first');
})->middleware('auth');

// STUDENT ROUTES
Route::get('/student/dashboard', function () {
    return view('student.dashboard');
})->middleware(['auth', 'role'])->name('student-dashboard');




// ADMIN ROUTES
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'role'])->name('admin-dashboard');

Route::get('/admin/student-list', function () {
    return view('admin.student_list');
})->middleware(['auth', 'role'])->name('student-list');

Route::get('/admin/student-add', function () {
    return view('admin.student_add');
})->middleware(['auth', 'role'])->name('student-add');

Route::get('/admin/student-requests', function () {
    return view('admin.student_requests');
})->middleware(['auth', 'role'])->name('student-requests');

Route::get('/admin/admin-list', function () {
    return view('admin.admin_list');
})->middleware(['auth', 'role'])->name('admin-list');

Route::get('/admin/admin-add', function () {
    return view('admin.admin_add');
})->middleware(['auth', 'role'])->name('admin-add');

Route::get('/admin/company-list', function () {
    return view('admin.company_list');
})->middleware(['auth', 'role'])->name('company-list');

Route::get('/admin/company-add', function () {  //TO ADD
    return view('admin.company_add');
})->middleware(['auth', 'role'])->name('company-add');


Route::post('/registrationRequest', [PendingController::class, 'createPending'])->name('registrationRequest');

Route::post('/adminAdd', [AdminController::class, 'registerAdmin'])->name('adminAdd');;
