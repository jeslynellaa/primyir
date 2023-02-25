<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\CreateUserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\BulletinController;
use App\Http\Controllers\GradesController;
use App\Http\Controllers\SchoolyearsController;
use App\Mail\TemporaryCredentials;
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

// Route::get('/', function () {
//     return redirect()->route('home');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/sf5', [App\Http\Controllers\FacultyController::class, 'generate_sf5'])->name('sf5_pdf');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.index');
Route::get('/faculty', [App\Http\Controllers\HomeController::class, 'faculty'])->name('faculty.index');

Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
 });

// Route::get('/student', [App\Http\Controllers\HomeController::class, 'student'])->name('student.index');

    Route::get('curricula', [HomeController::class, 'getCurricula'])->name('curricula');
// ============ EDIT PROFILE ROUTES ==============
        //Address Dropdown Routes
    Route::get('regions', [ProfilesController::class, 'getRegions'])->name('regions');
    Route::get('provinces', [ProfilesController::class, 'getProvinces'])->name('provinces');
    Route::get('cities', [ProfilesController::class, 'getCities'])->name('cities');
    Route::get('barangays', [ProfilesController::class, 'getBarangays'])->name('barangays');


        // ============ Profile Routes ============
    Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/info/{user}', [ProfilesController::class, 'updateInfo'])->name('profile.updateInfo');
        // ============ Address Routes ============
    Route::patch('/profile/address/{user}', [ProfilesController::class, 'updateAddress'])->name('profile.updateAddress');


    // ============ CHANGE PASSWORD ROUTES ==============
    Route::get('/pw/{user}/edit', [ChangePasswordController::class, 'edit'])->name('pw.edit');
    Route::patch('/pw/{user}', [ChangePasswordController::class, 'update'])->name('pw.update');


// ======= Admin - FACULTY ROUTES ===========

Route::get('/admin/faculty', [FacultyController::class, 'index'])->name('admin.faculty.index');
Route::get('/admin/faculty/create', [FacultyController::class, 'create'])->name('admin.faculty.create');
Route::get('/admin/faculty/{teacher}/edit', [FacultyController::class, 'edit'])->name('admin.faculty.edit');
Route::patch('/admin/faculty/{teacher}', [FacultyController::class, 'update'])->name('admin.faculty.update');
Route::get('/admin/faculty/{teacher}', [FacultyController::class, 'show'])->name('admin.faculty.show');

Route::post('/admin/faculty', [FacultyController::class, 'store'])->name('admin.faculty.store');
Route::patch('/admin/faculty/{teacher}', [FacultyController::class, 'update'])->name('admin.faculty.update');


// ======= Admin - SECTION ROUTES ===========
Route::get('/admin/sections', [SectionsController::class, 'index'])->name('admin.sections.index');
Route::get('/admin/sections/create', [SectionsController::class, 'create'])->name('admin.sections.create');
Route::post('/admin/sections', [SectionsController::class, 'store'])->name('admin.sections.store');
Route::patch('/admin/sections/{user}', [SectionsController::class, 'update'])->name('admin.sections.update');

// ======= Admin - SCHOOLYEAR ROUTES ===========
Route::get('/admin/schoolyears', [SchoolyearsController::class, 'index'])->name('admin.schoolyears.index');
Route::get('/admin/schoolyears/create', [SchoolyearsController::class, 'create'])->name('admin.schoolyears.create');
Route::post('/admin/schoolyears', [SchoolyearsController::class, 'store'])->name('admin.schoolyears.store');
Route::patch('/admin/schoolyears/{user}', [SchoolyearsController::class, 'update'])->name('admin.schoolyears.update');


// ======= Admin - STUDENT ROUTES ===========
Route::get('/admin/students', [StudentsController::class, 'index'])->name('admin.students.index');
Route::get('/admin/students/create', [StudentsController::class, 'create'])->name('admin.students.create');
Route::post('/admin/students', [StudentsController::class, 'store'])->name('admin.students.store');
Route::get('/admin/students/{student}', [StudentsController::class, 'show'])->name('admin.students.show');
Route::get('/admin/students/{student}/edit', [StudentsController::class, 'edit'])->name('admin.students.edit');
Route::patch('/admin/students/{student}', [StudentsController::class, 'update'])->name('admin.students.update');

Route::get('/admin/students/{student}/enrollment/create', [StudentsController::class, 'create_enrollment'])->name('admin.students.create_enrollment');
Route::post('/admin/students/{student}/enrollment', [StudentsController::class, 'store_enrollment'])->name('admin.students.store_enrollment');
Route::get('/admin/students/{student}/view/{syid}', [StudentsController::class, 'enroll_show'])->name('admin.students.enroll.show');

Route::get('/admin/students/{student}/view/{syid}/add', [StudentsController::class, 'enroll_add'])->name('admin.students.enroll.add');
Route::post('/admin/students/{student}/view/{syid}', [StudentsController::class, 'enroll_store'])->name('admin.students.enroll.store');
Route::get('/admin/students/view/{syid}/edit', [StudentsController::class, 'enroll_edit'])->name('admin.students.enroll_edit');
Route::put('/admin/students/view/{syid}', [StudentsController::class, 'enroll_update'])->name('admin.students.enroll_update');

Route::get('/emails/temporary_credentials', function (){
    return view('emails.temporary_credentials');
});

    //Address Dropdown Routes
    Route::get('getSections', [StudentsController::class, 'getSections'])->name('getSections');

// ======= Admin - SUBJECT ROUTES ===========
Route::get('/admin/subjects', [SubjectsController::class, 'index'])->name('admin.subjects.index');
Route::get('/admin/subjects/create', [SubjectsController::class, 'create'])->name('admin.subjects.create');
Route::post('/admin/subjects', [SubjectsController::class, 'store'])->name('admin.subjects.store');
Route::get('/admin/subjects/{subject}/edit', [SubjectsController::class, 'edit'])->name('admin.subjects.edit');
Route::get('/admin/subjects/{subject}', [SubjectsController::class, 'show'])->name('admin.subjects.show');
Route::put('/admin/subjects/{subject}', [SubjectsController::class, 'update'])->name('admin.subjects.update');

Route::get('/admin/subjects/class/{subclass}/create', [SubjectsController::class, 'create_class'])->name('admin.subjects.class.create');
Route::post('/admin/subjects/class', [SubjectsController::class, 'store_class'])->name('admin.subjects.class.store');
Route::get('/admin/subjects/class/{subclass}/edit', [SubjectsController::class, 'edit_class'])->name('admin.subjects.edit_subclass');
Route::put('/admin/subjects/class/{subclass}', [SubjectsController::class, 'update_class'])->name('admin.subjects.update_subclass');

Route::get('getSubjects', [SubjectsController::class, 'getSubjects'])->name('getSubjects');

    //Address Dropdown Routes
    Route::get('getSections', [StudentsController::class, 'getSections'])->name('getSections');
    Route::get('getStudents', [StudentsController::class, 'getStudents'])->name('getStudents');

// ======= Admin - CURRICULA ROUTES ===========
Route::get('/admin/curriculum/create', [SubjectsController::class, 'curricula_create'])->name('admin.curriculum.create');
Route::post('/admin/curriculum', [SubjectsController::class, 'curricula_store'])->name('admin.curriculum.store');
Route::get('/admin/curriculum/{subject}/edit', [SubjectsController::class, 'curricula_edit'])->name('admin.curriculum.edit');
Route::patch('/admin/curriculum/{subject}', [SubjectsController::class, 'curricula_update'])->name('admin.curriculum.update');
    
// ======= Admin - EVENT ROUTES ===========
Route::get('/admin/events', [EventsController::class, 'index'])->name('admin.events.index');
Route::get('/admin/events/create', [EventsController::class, 'create'])->name('admin.events.create');
Route::post('/admin/events', [EventsController::class, 'store'])->name('admin.events.store');
Route::get('/admin/articles/create', [EventsController::class, 'articles_create'])->name('admin.articles.create');
Route::post('/admin/articles', [EventsController::class, 'articles_store'])->name('admin.articles.store');
// Route::patch('/sections/{user}', [SectionsController::class, 'update'])->name('sections.update');

// ======= Admin - REPORTS/ARTICLES ROUTES ===========
Route::get('/admin/reports', [ReportsController::class, 'index'])->name('admin.reports.index');
Route::get('/admin/reports/create', [ReportsController::class, 'create'])->name('admin.reports.create');
Route::get('/admin/reports/sf1', [ReportsController::class, 'sf1'])->name('admin.reports.sf1');
Route::get('/admin/reports/sf1/create', [ReportsController::class, 'sf1_create'])->name('admin.reports.sf1_create');
Route::post('/admin/reports/sf1', [ReportsController::class, 'sf1_store'])->name('admin.reports.sf1_store');
Route::get('/admin/reports/sf2', [ReportsController::class, 'sf2'])->name('admin.reports.sf2');
Route::get('/admin/reports/sf6', [ReportsController::class, 'sf6'])->name('admin.reports.sf6');
Route::get('/admin/reports/sf8', [ReportsController::class, 'sf8'])->name('admin.reports.sf8');


Route::post('/admin/reports', [ReportsController::class, 'store'])->name('admin.reports.store');
// Route::patch('/sections/{user}', [SectionsController::class, 'update'])->name('sections.update');

// VIEW GRADES 
Route::get('/grades', [App\Http\Controllers\StudentsController::class, 'viewGrades'])->name('grades');



// VIEW GRADES 
Route::get('/grades', [App\Http\Controllers\StudentsController::class, 'viewGrades'])->name('grades');



Route::get('/sf1', [App\Http\Controllers\FacultyController::class, 'generate_sf1'])->name('sf1_pdf');
Route::get('/sf2', [App\Http\Controllers\FacultyController::class, 'generate_sf2'])->name('sf2_pdf');
Route::get('/sf4', [App\Http\Controllers\FacultyController::class, 'generate_sf4'])->name('sf4_pdf');



// ================================ FACULTY ROUTES ========================================

// ======= Faculty - BULLETIN ROUTES ===========
Route::get('/faculty/bulletin', [BulletinController::class, 'index'])->name('faculty.bulletin.index');


// ======= Faculty - GRADE ROUTES ===========
Route::get('/faculty/grades', [GradesController::class, 'index'])->name('faculty.grades.index');
Route::get('/faculty/grades/{subclass}', [GradesController::class, 'show'])->name('faculty.grades.show');
Route::get('/faculty/grades/{subclass}/{grading}/edit', [GradesController::class, 'edit'])->name('faculty.grades.edit');
Route::patch('/faculty/grades/{subclass}/{grading}', [GradesController::class, 'update'])->name('faculty.grades.update');

Route::get('getGrades', [GradesController::class, 'getGrades'])->name('getGrades');