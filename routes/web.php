<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PluginController;

Route::get('/', function () {
    return view('landingPage');
});

Route::middleware("auth")->group(function(){
    Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');    //user can only access when logged in
});


Route::get('/register', [AuthController::class, 'register'])->name("register");
Route::post('/register', [AuthController::class, 'registerPost'])->name("register.post");
Route::get('/login', [AuthController::class, 'login'])->name("login");
Route::post('/login', [AuthController::class, 'loginPost'])->name("login.post");

Route::post('/createExpenseCategory', [HomeController::class, 'createExpenseCategory'])->name("categories.store");
Route::post('/createExpense', [HomeController::class, 'createExpense'])->name("expense.store");

Route::post('/createMessage', [PluginController::class, 'createMessage'])->name("create.message");
Route::post('/getMessage', [PluginController::class, 'getMessage'])->name("get.message");

Route::get('/getUserExpenses', [HomeController::class, 'getUserExpenses']);
Route::get('/getExpenseCategory', [HomeController::class, 'getExpenseCategory']);
Route::get('/getTotalExpensesAmount', [HomeController::class, 'getTotalExpensesAmount']);

Route::get('/getPluginTemplate', [PluginController::class, 'getPluginTemplate'])->name("getPluginTemplate");

Route::delete('/deleteExpense/{id}', [HomeController::class, 'deleteExpense'])->name('deleteExpense');

