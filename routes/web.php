<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LayoutController;
//use App\Http\Controllers\Layout1Controller;
use App\Http\Controllers\UploadController;
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
        //layout
// Route::get('/dashboard2', function () {
//     return view('admin.layouts.admin');
// });
Route::get('/homeone', function () {
    return view('admin.pages.homeone');
});
Route::get('/table', function () {
    return view('admin.pages.tablepage');
});

Route::get('/chart', function () {
    return view('admin.pages.chartpage');
});
// Route::get('/dashboard3', function () {
//     return view('website.layouts.website');
// });
// Route::get('/home', function () {
//     return view('website.pages.home');
// });
// Route::get('/product', function () {
//     return view('website.pages.product');
// });
// Route::get('/blog', function () {
//     return view('website.pages.blog');
// });

// Route::any('/insert', function () {
//     return view('insert');
// });
 //insertion
Route::get('insert', [EmployeesController::class, 'insert']);
Route::post('store-employees', [EmployeesController::class, 'store']);
 //insertion
 Route::get('employees',[EmployeesController::class,'show']);

 Route::get('edit/{id}',[EmployeesController::class,'edit']);
 Route::post('update/{id}',[EmployeesController::class,'update']);
 Route::get('delete/{id}',[EmployeesController::class,'delete']);
                         //authentication code

Route::get('/login',[AuthController::class,'login']);
Route::post('/loginstore',[AuthController::class,'loginstore']);



// Route::group(['middleware' => 'checkloggedin'],function()
// {
// Route::get('/dashboard',[AuthController::class,'dashboard']);
// });


Route::group(['middleware' => 'checkStudent'],function()
{
Route::get('/student',[AuthController::class,'student']);
});

Route::group(['middleware' => 'checkTeacher'],function()
{
Route::get('/teacher',[AuthController::class,'teacher']);
});

                        //end authentication code

                        //start layout code

Route::get('/login',[LayoutController::class,'login']);
Route::post('/loginstore',[LayoutController::class,'loginstore']);


//  Route::group(['middleware' => 'checkloggedin'],function()
//  {

// Route::group(['middleware' => 'checkAdmin'],function()
// {
//  Route::get('/admin.pages.homeone',[LayoutController::class,'homeone']);
//  });

// Route::group(['middleware' => 'checkCustomer'],function()
//  {
//  Route::get('website.pages.home',[LayoutController::class,'home']);
//  });

//  });


////////
Route::middleware(['checkloggedin', 'checkAdmin'])->group(function () {
    Route::get('dashboard2', [LayoutController::class, 'admin']);
    Route::get('homeone', [LayoutController::class, 'homeone']);
    Route::get('table', [LayoutController::class, 'table']);
    Route::get('chart', [LayoutController::class, 'chart']);


});
Route::middleware(['checkloggedin', 'checkCustomer'])->group(function () {
    Route::get('dashboard3', [LayoutController::class, 'customer']);
    Route::get('product', [LayoutController::class, 'product']);
    Route::get('blog', [LayoutController::class, 'blog']);
    Route::get('home', [LayoutController::class, 'home']);
    //Route::get('logout', [LayoutController::class, 'logout']);
});

Route::get('logout', [LayoutController::class, 'logout']);


//image

Route::get('upload', [UploadController::class, 'Upload']);
Route::post('uploadimage', [UploadController::class, 'Uploadimage']);
