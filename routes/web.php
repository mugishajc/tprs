<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\RegisterCallController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RegisterTagController;
use App\Http\Controllers\RegisterVoucherController;
use App\Http\Controllers\RegisterTaskController;
use App\Http\Controllers\RegisterPlatenumberController;
use App\Http\Controllers\RegisterSimcardController;
use App\Http\Controllers\ManageAttendanceController;
use App\Http\Controllers\RegisterNotificationController;
use App\Http\Controllers\LostdevicesController;

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
    return view('ahabanza.index');
});

Route::get('/signin', function () {
    return view('auth.login');
});

Route::get('/logout', [HomeController::class,'logoutadmin'])->name('logout')
->middleware('auth');

// Route::post('/signin', [LoginController::class,'index'])->name('login')
// ;

Route::get('/v1/admin/dashboard/home',[HomeController::class,'dashboard_panel'])
->name('dashboard')
->middleware('auth');


Route::get('/registeruser', [RegisterUserController::class,'dashboard_adduser'])
    ->name('registeruser')
    ->middleware('auth');

    Route::get('deleteuser/{id}','RegisterUserController@destroyuser')
    ->middleware('auth');
    
    Route::get('/EditUser/{id}','RegisterUserController@showuser');
    Route::post('edituser/{id}','RegisterUserController@updateuser');

    Route::post('/adduser','RegisterUserController@adduser')->name('adduser');

    Route::post('/addcall','RegisterCallController@addcall')->name('addcall');
Route::get('deletecall/{id}','RegisterCallController@destroycall')
->middleware('auth');

Route::get('/Editcall/{id}','RegisterCallController@showcalls');

Route::post('Updatecall/{id}','RegisterCallController@updatecall');



Route::get('/manageuser',[RegisterUserController::class,'viewallusers'])
->name('manageuser')
->middleware('auth');

Route::get('/managecall',[RegisterCallController::class,'viewallcalls'])
->name('managecall')
->middleware('auth');



Route::get('/createcall',[RegisterCallController::class,'createcall'])
->name('createcall')
->middleware('auth');


Auth::routes();



Route::get('/Ourservices', [RegisterTagController::class,'services'])
    ->name('Ourservices')
    ->middleware('auth');

Route::post('/addquerytag','RegisterTagController@addquerytag')->name('addquerytag');

Route::get('/addquerytag', [RegisterTagController::class,'createtag'])
    ->name('addquerytag')
    ->middleware('auth');


    
Route::get('/makevoucher',[RegisterVoucherController::class,'createvoucher'])
->name('makevoucher')
->middleware('auth');


Route::get('/viewvouchers',[RegisterVoucherController::class,'managevoucher'])
->name('managevoucher')
->middleware('auth');


Route::post('/createjob','RegisterTaskController@createtask')->name('createjob');

Route::get('/createtask',[RegisterTaskController::class,'addtask'])
->name('createtask')
->middleware('auth');


Route::get('/EditJob/{id}','RegisterTaskController@showtask')
->middleware('auth');

Route::get('DeleteJob/{id}','RegisterTaskController@destroytask')
->middleware('auth');



Route::post('/addplatenumber','RegisterPlatenumberController@createplatenumber')->name('addplatenumber');

Route::get('/addplatenumber',[RegisterPlatenumberController::class,'addplatenumber'])
->name('addplatenumber')
->middleware('auth');


Route::get('/viewplatenumber',[RegisterPlatenumberController::class,'viewplatenumbers'])
->name('viewplatenumbers')
->middleware('auth');

Route::get('DeletePlatenumber/{id}','RegisterPlatenumberController@destroyplatenumber')
->middleware('auth');


Route::get('/managejob',[RegisterTaskController::class,'viewtasks'])
->name('managejob')
->middleware('auth');


Route::get('/Managesimcard',[RegisterSimcardController::class,'simcard'])
->name('simcard')
->middleware('auth');


Route::post('/addsimcard','RegisterSimcardController@createsimcard')->name('addsimcard');

Route::get('/EditSimcard/{id}','RegisterSimcardController@showsimcard')
->middleware('auth');
   
Route::post('InactiveSimcard/{id}','RegisterSimcardController@updateinactivesimcard');
Route::get('deletesimcard/{id}','RegisterSimcardController@destroysimcard')
->middleware('auth');
    

Route::get('/Attend', [ManageAttendanceController::class,'attend'])
    ->name('attend')
    ->middleware('auth');

    Route::post('/addvoucher','RegisterVoucherController@addvoucher')->name('addvoucher');


    Route::get('/createnotification', [RegisterNotificationController::class,'notification'])
    ->name('notification')
    ->middleware('auth');


    Route::post('/addnotification','RegisterNotificationController@notify')->name('addnotification');
    Route::get('Deletemessage/{id}','RegisterNotificationController@destroymessage')
    ->middleware('auth');

    Route::get('Messages','RegisterNotificationController@showmessages')
    ->middleware('auth');

    Route::get('ManageVoucher/{id}','RegisterVoucherController@showvoca')
    ->middleware('auth');


    Route::get('/Lostdevices','LostdevicesController@view')
    ->middleware('auth');

    
    Route::post('/lostdevices','LostdevicesController@addlost')->name('lostdevices');
   
    Route::get('/ViewLost','LostdevicesController@lost')
    ->middleware('auth');


    Route::get('DeleteLostDevices/{id}','LostdevicesController@destroymessage')
    ->middleware('auth');
    