<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Expert;
use App\Http\Middleware\Recruiter;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;


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


Route::get('/', [HomeController::class,'index']);

Route::get('/about',[AboutController::class,'aboutPage']);





// Route::get('about', function () {
//     return view('pages.about');
// });


Route::get('services', function () {
    return view('pages.services');
});

Route::get('training', function () {
    return view('pages.training');
});

Route::get('resources', function () {
    return view('pages.resources');
});


Route::get('resources-view', function () {
    return view('pages.resources-view');
});

Route::get('all-pages', function () {
    return view('pages.all-pages');
});

Route::get('services-categories', function () {
    return view('pages.services-categories');
});

Route::get('new-service-category', function () {
    return view('pages.new-service-category');
});



Route::get('view-training', function () {
    return view('pages.view-training');
});

Route::get('team', function () {
    return view('pages.team');
});

Route::get('projects', function () {
    return view('pages.projects');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('view-job/{id}',[DashboardController::class, 'viewJob']);

//services and sub-services
Route::get('service-child', function () {
    return view('pages.service-child');
});

Route::get('service/{id}/{title}',[ServiceController::class,'showService']);
Route::get('service-child/{id}/{title}',[ServiceController::class,'showSubService']);



Route::middleware([Authenticate::class])->group(function(){

    Route::post('change-password',[HomeController::class,'changePassword']);
    
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/jobs',[DashboardController::class,'jobsList']);

    Route::get('settings', function () {
        return view('dashboard.recruiter.settings');
    });

    Route::get('add-job', function () {
        return view('dashboard.recruiter.add-job');
    });

    Route::post('/add-job', [DashboardController::class,'addJob'])->name('add-job');

    //notification 
    Route::get('mark-as-read/?{id}',[DashboardController::class,'markasRead']);
    
    Route::middleware([Expert::class])->group(function(){
        Route::get('/cv-profile', [DashboardController::class, 'profile'])->name('profile');
        Route::post('/update-profile', [DashboardController::class, 'updateProfile'])->name('update-profile');
        Route::post('/update-education', [DashboardController::class, 'updateEducation'])->name('update-education');
        Route::post('/update-experience',[DashboardController::class,'updateExperience'])->name('update-experience');
       // Route::get('/jobs',[DashboardController::class,'jobsList']);
       
        //apply job
        Route::get('apply/{id}',[DashboardController::class,'applyJob']);
        Route::get('my-applications',[DashboardController::class,'expertApplication']);
    });

    Route::middleware([Recruiter::class])->group(function(){
        //Route::post('/add-job', [DashboardController::class,'addJob'])->name('add-job');
        Route::get('/edit-job/{id}',[DashboardController::class,'showJob']);
        Route::get('/delete-job/{id}',[DashboardController::class,'deleteJobById']);
        Route::get('manage-jobs', [DashboardController::class,'manageJob']);
        Route::get('manage-applicants/{jobId}',[DashboardController::class,'manageApplicants']);
        Route::get('view-applicant/{id}',[DashboardController::class,'viewApplicant']);
    });

    Route::middleware([Admin::class])->group(function(){
        //Route::post('/add-job', [DashboardController::class,'addJob'])->name('add-job');
        Route::get('/edit-job/{id}',[DashboardController::class,'showJob']);
        Route::get('job-visibility/{id}',[DashboardController::class,'jobVisibility']);

        Route::get('show-employers',[DashboardController::class,'showEmployer']);
        Route::get('show-applicants',[DashboardController::class,'showExpert']);

        Route::get('new-service',[ServiceController::class,'addServiceForm']);
        Route::post('new-service',[ServiceController::class,'addService']);
        Route::get('all-services',[ServiceController::class,'allService']);

        Route::get('service/edit/{id}',[ServiceController::class,'editService']);
        Route::post('service/update/{id}',[ServiceController::class,'updateService']);

        Route::get('service/delete/{id}',[ServiceController::class,'deleteService']);


        //sub service
        Route::get('new-service-item',[ServiceController::class,'subServiceForm']);
        Route::post('new-service-item',[ServiceController::class,'subServiceAdd']);

        Route::get('service-item-list',[ServiceController::class,'allSubService']);

        Route::get('subservice/edit/{id}',[ServiceController::class,'editSubService']);
        Route::post('subservice/update/{id}',[ServiceController::class,'updateSubService']);

        Route::get('subservice/delete/{id}',[ServiceController::class,'deleteSubService']);

        Route::get('edit-home', [HomeController::class,'form']);
        Route::post('home/update',[HomeController::class,'createOrUpdate']);
        
        Route::get('edit-about',[AboutController::class,'index']);
        Route::post('about/update',[AboutController::class,'createOrUpdate']);

        //add features expert
        Route::any('update-feature/{id}',[DashboardController::class,'changeFeature']);
        

    });

});