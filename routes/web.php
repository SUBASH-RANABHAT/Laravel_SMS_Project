<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\ScheduleController;


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

Route::post('/student/check', [StudentController::class, 'check'])->name('student_check');

Route::get('/', [IndexController::class, 'index']);

Route::get('/student/register', [StudentController::class, 'index'])->name('student_register');
Route::get('/student/login', [StudentController::class, 'login'])->name('student_login');
Route::post('/student/store', [StudentController::class, 'storeStudent'])->name('student_store');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student_edit');
Route::put('/student/update/{id}', [StudentController::class, 'update'])->name('student_update');
Route::get('/student/delete/{id}', [StudentController::class, 'delete'])->name('student_delete');


Route::post('/admin/blog_store', [PageController::class, 'savedata'])->name('blog_store');
Route::post('/admin/about_store', [PageController::class, 'aboutsave'])->name('about_store');
Route::post('/admin/notice_store', [PageController::class, 'noticesave'])->name('notice_store');


Route::post('/post/schedule', [ScheduleController::class, 'storeSchedule'])->name('schedule_post');





Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/student/post', [StudentController::class, 'post'])->name('student_details');

    // Route::get('/teacher/post', [TeacherController::class, 'post'])->name('teacher_details');

    Route::get('/page-add', [PageController::class, 'AddPage'])->name('page-add');
    Route::get('/blog_post', [PageController::class, 'blog_post'])->name('blog_post');

    Route::get('/about_post', [PageController::class, 'about_post'])->name('about_post');
    Route::get('/about-add', [PageController::class, 'AboutAdd'])->name('about_add');

    Route::get('/notice_post', [PageController::class, 'notice_post'])->name('notice_post');
    Route::get('/notice-add', [PageController::class, 'NoticeAdd'])->name('notice_add');

    Route::get('/teacher', [TeachersController::class, 'index'])->name('teacher');
    Route::post('/post/teacher', [TeachersController::class, 'store'])->name('teacher_post');

    Route::get('/teacher/schedule', [ScheduleController::class, 'index'])->name('schedule');

    Route::get('/teacher/edit/{id}', [TeachersController::class, 'edit'])->name('teacher.edit');
    Route::get('/teacher/delete/{id}', [TeachersController::class, 'delete'])->name('teacher.delete');


    Route::get('/teacher/view', [TeachersController::class, 'view'])->name('teacher.view');
});

Route::get('/dropdown', [TeachersController::class, 'showDropdown'])->name('dropdown');

Route::get('calendar-event', [CalenderController::class, 'index'])->name('index_calendar');
Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents'])->name('crud_calendar');

Route::get('/class', [ClassController::class, 'index'])->name('class');
Route::post('/post/class', [ClassController::class, 'store'])->name('class_post');
Route::get('/class/view', [ClassController::class, 'show'])->name('class.show');
// Route::get('/class/delete/{id}', [ClassController::class, 'destroy'])->name('class.destroy');

// calendar route
Route::get('calendar', [CalendarController::class, 'index'])->name('calendar.index');
Route::post('calendar/store', [CalendarController::class, 'store'])->name('calendar.store');
Route::get('calendar/add_event', [CalendarController::class, 'event'])->name('calender.event');
Route::post('calendar/event_store', [CalendarController::class, 'event_store'])->name('calendar.event_store');
