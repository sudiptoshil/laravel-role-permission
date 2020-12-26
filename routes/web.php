<?php

// use Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\smsController;
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
    return view('welcome');
});

Route::get('/user-panel', function () {
    return "this is user panel";
})->name('user-panel')->middleware('is_user');


Auth::routes();

Route::group(['middleware' => ['auth','userPermission']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('role','App\Http\Controllers\RoleController');
    Route::resource('permission','App\Http\Controllers\PermissionController');
    Route::resource('user', 'App\Http\Controllers\UserController');

});



// Route::get('/sms/send/{to}', function(\Nexmo\Client $nexmo, $to){
//     $message = $nexmo->message()->send([
//         'to' => $to,
//         'from' => '01624772008',
//         'text' => 'Sending SMS from Laravel. Woohoo!'
//     ]);
//     Log::info('sent message: ' . $message['message-id']);
// });

    Route::get('/send', [smsController::class, 'index'])->name('send');

// 01819903891
