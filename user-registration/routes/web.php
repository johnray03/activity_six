<?php

use Illuminate\Support\Facades\Route;

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

Route::post("/login", [LoginController::class, "index"])->name("login.index");

Route::get("/login/create", [LoginController::class, "create"])->name("login.create");
Route::post("/login", [LoginController::class, "store"])->name("login.store");

Route::get("/login/{id}", [LoginController::class, "show"])->name("login.show");

Route::get("/login/{id}/edit", [LoginController::class, "edit"])->name("login.edit");
Route::put("/login/{id}", [LoginController::class, "update"])->name("login.update");

Route::post("/login/{id}", [LoginController::class, "destroy"])->name("login.destroy");


// Route::get('/', function () {
//     return view('navtemplate');
// });

// Route::get('/login', function() {
//     return view("login");
// });
// Route::post('/login', function() {
//     return view("login");
// });

// Route::get('/register', function() {
//     return view("register");
// });
// Route::post('/register', function() {
//     return view("register");
// });

// Route::get('/dashboard', function() {
//     return view("dashboard");
// });




