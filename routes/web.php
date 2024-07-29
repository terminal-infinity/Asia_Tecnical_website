<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// admin group middleware
Route::middleware(['auth','role:admin'])->group(function(){

    Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout',[AdminController::class,'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile',[AdminController::class,'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store',[AdminController::class,'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password',[AdminController::class,'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password',[AdminController::class,'AdminUpdatePassword'])->name('admin.update.password');

    //category 
    Route::get('/admin/view_category', [AdminController::class, 'view_category'])->name('admin.view_category');
    Route::post('/admin/add_category', [AdminController::class, 'add_category'])->name('admin.add_category');
    Route::get('/admin/edit_category/{id}', [AdminController::class, 'edit_category'])->name('admin.edit_category');
    Route::post('/admin/update_category/{id}', [AdminController::class, 'update_category'])->name('admin.update_category');
    Route::get('/admin/delete_category/{id}', [AdminController::class, 'delete_category'])->name('admin.delete_category');

    //Course
    Route::get('/admin/add_course', [AdminController::class, 'add_course'])->name('admin.add_course');
    Route::post('/admin/upload_course', [AdminController::class, 'upload_course'])-> name('admin.upload_course');
    Route::get('/admin/view_course', [AdminController::class, 'view_course'])-> name('admin.view_course');
    Route::get('/admin/update_course/{id}', [AdminController::class, 'update_course'])-> name('admin.update_course');
    Route::post('/admin/edit_course/{id}', [AdminController::class, 'edit_course'])-> name('admin.edit_course');
    Route::get('/admin/delete_course/{id}', [AdminController::class, 'delete_course'])-> name('admin.delete_course');

    //Members All Route
    Route::get('/admin/view_member', [AdminController::class, 'view_member'])-> name('admin.view_member');
    Route::get('/admin/add_member', [AdminController::class, 'add_member'])->name('admin.add_member');
    Route::post('/admin/upload_member', [AdminController::class, 'upload_member'])-> name('admin.upload_member');
    Route::get('/admin/update_member/{id}', [AdminController::class, 'update_member'])-> name('admin.update_member');
    Route::post('/admin/edit_member/{id}', [AdminController::class, 'edit_member'])-> name('admin.edit_member');
    Route::get('/admin/delete_member/{id}', [AdminController::class, 'delete_member'])-> name('admin.delete_member');

    //Services Route
    Route::get('/admin/view_service', [AdminController::class, 'view_service'])-> name('admin.view_service');
    Route::get('/admin/add_service', [AdminController::class, 'add_service'])->name('admin.add_service');
    Route::post('/admin/upload_service', [AdminController::class, 'upload_service'])-> name('admin.upload_service');
    Route::get('/admin/update_service/{id}', [AdminController::class, 'update_service'])-> name('admin.update_service');
    Route::post('/admin/edit_service/{id}', [AdminController::class, 'edit_service'])-> name('admin.edit_service');
    Route::get('/admin/delete_service/{id}', [AdminController::class, 'delete_service'])-> name('admin.delete_service');

    //Image Gallary
    Route::get('/admin/view_image', [AdminController::class, 'view_image'])->name('admin.view_image');
    Route::post('/admin/upload_image', [AdminController::class, 'upload_image'])-> name('admin.upload_image');
    Route::get('/admin/delete_image/{id}', [AdminController::class, 'delete_image'])-> name('admin.delete_image');

}); // end group admin middleware


// agent group middleware
Route::middleware(['auth','role:agent'])->group(function(){
    Route::get('/agent/dashboard',[AgentController::class,'AgentDashboard'])->name('agent.dashboard');
}); // end group agent middleware


Route::get('/admin/login',[AdminController::class,'AdminLogin'])->name('admin.login');



    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/about',[HomeController::class,'about'])->name('about');
    Route::get('/course',[HomeController::class,'course'])->name('course');
    
    Route::get('/service_details/{id}', [HomeController::class, 'service_details'])->name('service_details');



