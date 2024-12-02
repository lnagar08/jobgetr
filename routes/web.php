<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WriteController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\ImproveController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\JobPreferenceController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UploadMyResumeController;
use App\Http\Controllers\MessageController;


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\AppManagementController;
use App\Http\Controllers\Admin\ContantManagementController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\InterviewPlanController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\PageManagerController;
use App\Http\Controllers\Admin\QuestionsController;
use App\Http\Controllers\Admin\AJobPreferenceController;
use App\Http\Controllers\Admin\AMessageController;

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

Route::get('/switch/{email}/to/{token}', [RegisterController::class, 'switchuser'])->name('user.switchuser');


Route::get('/', function () {
    return view('index');
});
// Content Pages
Route::get('blog', function(){
    return view('blog');
})->name('blog');

Route::get('about-us', function(){
    return view('about-us');
})->name('about-us');

Route::get('contact-us', function(){
    return view('contact-us');
})->name('contact-us');

Route::get('faq', function(){
    return view('faq');
})->name('faq');

Route::get('terms-of-use', function(){
    return view('terms-of-use');
})->name('terms-of-use');

Route::get('privacy-policy', function(){
    return view('privacy-policy');
})->name('privacy-policy');

Auth::routes();


Route::post('/user-create', [RegisterController::class, 'userCreate'])->name('user.create');
Route::post('/validate-user-otp', [RegisterController::class, 'validateOTP'])->name('validate-user-otp');
//for testing the webhook
Route::POST('my-subscriptions/renew', [SubscriptionController::class, 'renew'])->name("mysubscriptions.renew");

// Forget Password
Route::get('/reset-password', [AuthController::class, 'PasswordReset'])->name('reset-password-before-login');
Route::post('/email-reset-notification', [AuthController::class, 'UserResetPassword'])->name('email-notification');
Route::get('/password-confirm', [AuthController::class, 'ConfirmPassword']);
Route::post('/password-update', [AuthController::class, 'ResetUpdatePassword'])->name('password.update');


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('reset-password', [HomeController::class, 'resetPassword'])->name('reset-password');
Route::post('update-reset-password', [HomeController::class, 'updateResetPassword'])->name('update-reset-password');

Route::group(['middleware' => 'user'], function () {
//Write 
Route::get('/create-resume', [WriteController::class, 'resumeCreation'])->name('create-resume');
Route::post('/save-resume-data', [WriteController::class, 'saveResumeData'])->name('save-resume-data');
Route::post('/delete-resume-section', [WriteController::class, 'deleteResumeSection'])->name('delete-resume-section');
Route::post('/resume-check-login', [WriteController::class, 'checkUser'])->name('resume-check-login');
Route::post('/resume-login-popup', [WriteController::class, 'loginPopup'])->name('resume-login-popup');
Route::get('/add-additional-ul', [WriteController::class, 'addAdditionalUL'])->name('add-additional-ul');
Route::post('/validate-otp', [WriteController::class, 'validateOTP'])->name('validate-otp');
Route::post('/resend-otp', [WriteController::class, 'resendOTP'])->name('resend-otp');


Route::get('/upload-my-resume', [UploadMyResumeController::class, 'index'])->name('upload-my-resume.index');
Route::post('/upload-my-resume', [UploadMyResumeController::class, 'store'])->name('upload-my-resume.store');
Route::get('/resumeupload/{token}', [UploadMyResumeController::class, 'resumeuploadverify'])->name('upload-my-resume.resumeuploadverify');




// Design
Route::get('/design-resume', [DesignController::class, 'designResume'])->name('design-resume');
Route::get('/choose-resume-template', [DesignController::class, 'chooseResumeTemplate'])->name('choose-resume-template');
Route::post('/save-template-details', [DesignController::class, 'saveTemplateDetails'])->name('save-template-details');

// Improve
Route::get('improve', [ImproveController::class, 'index'])->name('improve');

// Share
Route::get('/share-resume', [HomeController::class, 'shareResume'])->name('share-resume');
Route::get('/resume/{id}', [HomeController::class,'finalResume'])->name('final-resume');

// Salaries Api
Route::get('salaries', [SalaryController::class, 'getSalaryData'])->name('get-salaries-data');


// My Profile
Route::get('my-profile', [HomeController::class, 'myProfile'])->name('my-profile');
Route::get('switchinterview', [HomeController::class, 'switch'])->name('switch-interview');

// Upload User Resume
Route::post('upload-resume', [HomeController::class, 'uploadResume'])->name('upload-resume');
Route::get('resume-delete', [HomeController::class, 'deleteResume'])->name('delete-upload-resume');

// Save Contact us 
Route::post('save-contact-us', [HomeController::class, 'saveContactUs'])->name('save-contact-us');

//JobPreference
Route::get('/job-preference', [JobPreferenceController::class, 'index'])->name('job-preference.index');
Route::post('/job-preference', [JobPreferenceController::class, 'store'])->name('job-preference.store');

//Message
Route::get('/message', [MessageController::class, 'index'])->name('message.index');
Route::post('/message', [MessageController::class, 'store'])->name('message.store');
Route::post('/get-message', [MessageController::class, 'getMessages'])->name('message.get');
Route::get('/load/more/messages', [MessageController::class, 'loadmoremessages'])->name('load.more.messages');


// Temp Test
Route::get('/download-pdf', [HomeController::class, 'downloadPDF'])->name('download.pdf');
Route::get('salaries-test', [SalaryController::class, 'getSalaryData2'])->name('test-salaries');

//My Subscriptions
    Route::middleware("auth")->group(function () {
        Route::get('/my-subscriptions', [SubscriptionController::class, 'index'])->name('mysubscriptions.index');
        Route::get('/my-subscriptions/upgrade', [SubscriptionController::class, 'upgrade'])->name('mysubscriptions.upgrade');
         Route::get('my-subscriptions/{id}/{url_to}', [SubscriptionController::class, 'show'])->name("mysubscriptions.show");
        Route::get('subscription', [SubscriptionController::class, 'subscription'])->name("subscription.create");
        Route::get('my-subscriptions/cancel', [SubscriptionController::class, 'cancel'])->name("mysubscriptions.cancel");
       
    });

});
/////////////////////////////
//         ADMIN          //
///////////////////////////



Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function () {
    
    Route::get('/login', function () {
        return view('auth.adminLogin');
    })->name('admin-login');
    Route::post('/check-admin-login', [AdminController::class, 'Login'])->name('check-admin-login');
    
       Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/Sales', [DashboardController::class, 'Sales']);
    Route::get('/table', [DashboardController::class, 'table']);
    Route::get('/change-password', [ChangePasswordController::class, 'index']);
    Route::post('/change-password/update/{id}', [ChangePasswordController::class, 'update']);
    Route::get('/scrapeWebsite', [AdminController::class, 'scrapeWebsite']);
    Route::get('/Logout', [AdminController::class, 'Logout']);

    // User Management
 
        Route::resource('/user-management', 'UserManagementController');
        Route::post('/user-management/uniqueemail', [UserManagementController::class, 'uniqueemail'])->name('user-management.uniqueemail');
        Route::post('/user-management/updateStatus', [UserManagementController::class, 'updateStatus'])->name('user-management.updateStatus');

        // app Management
        Route::get('/app-management/{id}', [AppManagementController::class, 'index'])->name('app-management.index');
        Route::get('/app-management/create/{id}', [AppManagementController::class, 'create'])->name('app-management.create');
        Route::post('/app-management/store/{id}', [AppManagementController::class, 'store'])->name('app-management.store');
        Route::get('/app-management/view/{userid}/{id}', [AppManagementController::class, 'view'])->name('app-management.view');
        Route::get('/app-management/delete/{userid}/{id}', [AppManagementController::class, 'delete'])->name('app-management.delete');

    
        // Plan Management
        Route::resource('/plan-management', 'PlanController');
        
        // plan-interview
        Route::resource('/plan-interview', 'InterviewPlanController');
        
        // Contant Management
        Route::resource('/contant-management', 'ContantManagementController');
        // Settings
        Route::resource('/settings', 'SettingController');
        // Transaction
        Route::resource('/transaction', 'TransactionController');
        
        // PageManager
        Route::resource('/pageManager', 'PageManagerController');
        
        // questions
        Route::resource('/questions', 'QuestionsController');
        
         // AJobPreference
        Route::resource('/job-Preferences', 'AJobPreferenceController');
        Route::post('/job-Preferences/updateStatus', [AJobPreferenceController::class, 'updateStatus'])->name('job-Preferences.updateStatus');
        
        //AMessage
        Route::get('/message', [AMessageController::class, 'index'])->name('amessage.index');
        Route::post('/message', [AMessageController::class, 'store'])->name('amessage.store');
        Route::post('/get-message', [AMessageController::class, 'getMessages'])->name('amessage.get');
        Route::get('/load/more/messages', [AMessageController::class, 'loadmoremessages'])->name('load.more.amessage');
    });
});
      

