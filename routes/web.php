<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\HomeController;

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
    return view('home');
});
Route::get("/about",[HomeController::class, "about"])->name("about");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/product",[productController::class, "managerpage"])->name("return");



Route::post("/productlist",[productController::class, "store"])->name("productlist");
Route::get("/productlist",[productController::class, "userrental"])->name("bookinglist");
Route::get("/deleteuserdevice/{id}", [productcontroller::class, "deleteuserdevice"]);

//user rental history
Route::post("/userhistory",[productController::class, "userRentalHistory_store"])->name("productreturnlist");
Route::get("/userhistory",[productController::class, "userrentalhistory"])->name("returnhistory");

Route::post("/devicelist",[productController::class, "device_entry"])->name("adddevice");
Route::get("/devicelist",[productController::class, "alldevice"])->name("alldevice");
Route::get("/adddevice",[productController::class, "adddevice"])->name("device_add_form");
Route::get("/devicedetail/{id}",[productController::class, "devicedetail"])->name("devicedetail");
// Route::get("/devicedetail/{brand}",[productController::class, "devicedetail"])->name("devicebrand");


//editdevice
Route::get("/editdevice/{id}",[productController::class, "edit_device"]);
Route::PUT("/updatedevice/{id}",[productcontroller::class, "update_device"]);

//deletedevice
Route::get("/deletedevice/{id}", [productcontroller::class, "destroy"]);

//add to the cart
Route::post("/cartlist",[productController::class, "item_cart"])->name("cartlist");
Route::get("/cartlist",[productController::class, "cartitem"])->name("cartitem");


//delete the device from the cart
Route::get("/deletecart/{id}", [productcontroller::class, "destroy_cart"]);

//rentalreturn from user side
Route::post("/returnlist",[productController::class, "user_rental_store"])->name("userrentalstore");
Route::get("/returnlist",[productController::class, "userrentalreturn"])->name("userrentalreturn");
Route::get("/releasedevice/{id}", [productcontroller::class, "returnManagerRental"]);

//managerDashboard page to find number of user and device
Route::get("/managerdashboard",[productController::class, "managerDashboard"])->name("dashboard");

Route::get("/contact",[productController::class, "contactus"])->name("contact");
