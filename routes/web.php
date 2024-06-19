<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\applicationcontroller;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\categoriescontroller;
use App\Http\Controllers\categoriesLicenseController;
use App\Http\Controllers\diplomaController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\instractorcontroller;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\multichoicercontroller;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\QuizquestionsradController;
use App\Http\Controllers\studentstoinstractorController;
use App\Http\Middleware\AdminAuthenticated;
use App\Models\Categories;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Commands\Show;
use Symfony\Component\Translation\MessageCatalogue;

use function Laravel\Prompts\search;

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
});
Route::get('/login',[Authcontroller::class,'Login'])->name('login');
Route::post('/login',[Authcontroller::class,'Loginpost'])->name('login.post');
Route::get('/register',[Authcontroller::class,'register'])->name('register');
Route::post('/register',[Authcontroller::class,'registerpost'])->name('register.post');
Route::get('/logout',[Authcontroller::class,'Logout'])->name('logout');
Route::get('/Dashboard',[Authcontroller::class,'Dashboard'])->name('Dashboard');
Route::get('/admindashboard',[Authcontroller::class,'admindashboard'])->name('admindashboard');
////////Profiles///////
Route::get('profile/create', [ProfileController::class, 'create'])->name('profile.create');
Route::post('profile', [ProfileController::class, 'createPost'])->name('profile.post');
Route::get('profile', [ProfileController::class, 'IndexProfile'])->name('profile.index');
Route::get('profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('profile/{id}', [ProfileController::class, 'delete'])->name('profile.delete');
/////////////////////////////////////////////////////////////////////////////////////////
Route::get('/forgot-password',[ForgotPasswordController::class,'resetpass'])->name('resetpasss');
Route::post('forgot-password', [ForgotPasswordController::class, 'resetpassPost'])->name('resetpassPost');
Route::get('reset-password/{token}', [ForgotPasswordController::class,'ResetPassword'])->name('ResetPassword');
Route::post('reset-password', [ForgotPasswordController::class, 'resetpasswordpost'])->name('ResetPasswordPost');
/////////aplicatios and books///////
Route::get('application/application',[applicationcontroller::class ,'app'])->name('apli');
///////////////// end aplicatiosn///
//// upload files route/////////////////////////////////////////////
Route::get('file',[FileController::class,'files']);
Route::post('/file', [FileController::class, 'store'])->name('file');
Route::get('/file/download/{id}', [FileController::class, 'download'])->name('file.download');
Route::get('/displayfileupload',[FileController::class,'displayFiles'])->name('displayFiles');
/////////////end files route ////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/fullcalendar',[FullCalenderController::class,'calendarindex'])->name('calendars');

Route::get('/createevent', [FullCalenderController::class, 'createevent'])->name('createevent');
Route::post('/createevent-post',[FullCalenderController::class,'create'])->name('add-post');
Route::get('/events', [FullCalenderController::class, 'getEvents']);
Route::get('/events/delete/{id}', [FullCalenderController::class, 'deleteEvent']);
Route::put('/events/{id}', [FullCalenderController::class, 'update']);
Route::post('/events/{id}/resize', [FullCalenderController::class, 'resize']);
Route::get('/events/search', [FullCalenderController::class, 'search']);
////
Route::get('/events/{id}/edit', [FullCalenderController::class, 'editEvent'])->name('edit-event');
Route::put('/events/{id}', [FullCalenderController::class, 'updateEvent'])->name('update-event');
////////////////////////////////////////////////////////////////////////////////////////////////
///////admincontroller ///////////////////////////////////////
Route::get('admin/admin',[AdminAuthController::class,'admin'])->name('admin');
Route::get('admin/AdminLogin',[AdminAuthController::class,'AdminLogin'])->name('AdminLogin');
Route::post('/AdminLogin',[AdminAuthController::class,'AdminLoginpost'])->name('AdminLogin.post');
Route::get('/adminlogout',[AdminAuthController::class,'adminlogout'])->name('adminlogout');
route::view('/adminshow',[AdminAuthController::class,'adminshow'])->name('adminshow');
/////////////////////////////////////////////////////////////////////////
//categories//
Route::get('categories/index', [CategoriesController::class, 'index'])->name('index');
Route::get('categories/create', [CategoriesController::class, 'create'])->name('categories.create');
Route::post('categories/create', [CategoriesController::class, 'createpost'])->name('categories.createpost');
Route::get('categories/edit/{id}', [CategoriesController::class, 'edit'])->name('categories.edit');
Route::put('categories/update/{id}', [CategoriesController::class, 'update'])->name('categories.update');
Route::delete('categories/delete/{id}', [CategoriesController::class, 'delete'])->name('categories.delete');
Route::get('categories/search', [CategoriesController::class, 'search'])->name('categories.search');
Route::get('/search', [categoriescontroller::class, 'search'])->name('search');
////////instractor/////
///Dashboardinstractor
Route::get('instractor/Dashboardinstractor',[instractorcontroller::class, 'Dashboardinstractor'])->name('Dashboardinstractor');
Route::get('instractor/instractorLogin',[instractorcontroller::class,'instractorLogin' ])->name('');//post
route::post('instractor/instractorLogin',[instractorcontroller::class,'instractorLoginpost'])->name('instractorLoginpost');
Route::get('instractorlogout',[instractorcontroller::class,'instractorlogout'])->name('instractorlogout');
/////formdataindextable
Route::get('instractor/formdataindextable', [instractorcontroller::class,'getformdata'])->name('getfromdataindex');
////   multichoicequestions /////
Route::get('/quiz', [QuizquestionsradController::class, 'Quizindex'])->name('quizindexblade');
Route::post('/quiz', [QuizquestionsradController::class, 'submitQuiz'])->name('submitQuiz');
Route::get('/results', [QuizquestionsradController::class, 'showResults'])->name('results');
///////////categoriesLicense////
Route::get('/car-license', [categoriesLicenseController::class, 'indexcar'])->name('car');
Route::get('/motorcycle-license', [categoriesLicenseController::class, 'indexmotor'])->name('motor');
Route::get('/truck-license', [categoriesLicenseController::class, 'indextruck'])->name('truck');
Route::get('/bus-license', [categoriesLicenseController::class, 'indexbus'])->name('bus');
Route::get('/pei-license', [categoriesLicenseController::class, 'indexpei'])->name('pei');
Route::get('/adr-license', [categoriesLicenseController::class, 'indexadr'])->name('adr');
Route::get('/taxi-license', [categoriesLicenseController::class, 'indextaji'])->name('taji');
////formtoinstractor////////
Route::get('studentstoinstractor/form',[studentstoinstractorController::class,'indexform'])->name('indexform'); 
Route::post('studentstoinstractor/process-form', [studentstoinstractorController::class, 'createFrom'])->name('post.form');
////diplomainfo///////
Route::get('diplomainfo/DiploamInfo', [diplomaController::class,'indexdimploma'])->name('indexdimploma');
Route::post('/messages/send', [MessageController::class, 'sendMessage'])->name('messages.send');
Route::get('/messages/history/{recipient_id}', [MessageController::class, 'getMessageHistory'])->name('messages.history');





