<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrescriptionController;
use App\Mail\TestEmail;
use App\Http\Controllers\PharmacyUserController;
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

Route::get('/home',[HomeController::class,'redirect']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::resource("/prescriptions", PrescriptionController::class);
Route::resource("/pharmacyusers", PharmacyUserController::class);


Route::get('send-email', function(){
    $mailData =[
        "name" =>"Test NAME",
        "dob"  =>"14/11/1995"
    ];

    Mail::to("hello@example.com")->send(new TestEmail($mailData));

    dd("Mail Sent Successfully!");

});