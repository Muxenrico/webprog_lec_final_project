<?php

use App\Http\Controllers\StoreController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomePageController;
use App\Http\Controllers\TransactionsController;
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


// WELCOME PAGE
Route::get('/',[WelcomePageController::class, 'index_welcome'])
->name('index_welcome');

Route::get('/a-home',[WelcomePageController::class, 'index_admin'])
->name('index_admin')
->middleware('adminM')
;

Route::get('/m-home',[WelcomePageController::class, 'index_member'])
->name('index_member')
->middleware('userM')
;


// Route::get('/sign-in', function () {
//     return view('signinPage');
// });


// AUTHENTICATION

Route::prefix('auth')->group(function(){
    Route::get('login', [AuthController::class, 
    'index_login'])->name('index_login')->middleware('guestM')
    ;

    Route::get('register', [AuthController::class, 
    'index_register'])->name('index_register')->middleware('guestM')
    ;

    Route::post('login', [AuthController::class, 
    'login'])->name('login');

    Route::post('register', [AuthController::class, 
    'register'])->name('register');

    Route::post('logout', [AuthController::class, 
    'logout'])->name('logout');
});


// Check Product Detail

Route::get('/m-productDetail/{id}', [StoreController::class, 'viewProductDetail'])
->middleware('userM');

Route::get('/a-productDetail/{id}', [StoreController::class, 'viewProductDetail2'])
->middleware('adminM');

Route::get('/deleteData/{id}', [StoreController::class, 'deleteProduct']);

// Add Item

Route::get('/add-item', [StoreController::class, 'createProduct'])
->middleware('adminM');

Route::post('/addItem', [StoreController::class, 'insertProduct']);


//view Page

Route::get('/m-view', [\App\Http\Controllers\StoreController::class, 'viewPage'])
->middleware('userM');

Route::get('/m-view/search', [\App\Http\Controllers\StoreController::class, 'viewPageSearch'])
->middleware('userM');

Route::get('/a-view', [\App\Http\Controllers\StoreController::class, 'viewPage2'])
->middleware('adminM');

Route::get('/a-view/search', [\App\Http\Controllers\StoreController::class, 'viewPageSearch2'])
->middleware('adminM');


//cart

Route::post('/add-to-cart/{id}', [CartController::class,
'addToCart'])->name('add-to-cart');

Route::get('/m-cart', [CartController::class,
'showCart'])->name('showCart')->middleware('userM');

Route::post('/delete-from-cart/{id}', [CartController::class,
'deleteFromCart']);

Route::post('/checkout', [CartController::class,
'checkout']);

Route::get('/editCart/{id}', [CartController::class, 
'editCart'])
->middleware('userM');

Route::patch('/updateCart/{id}', [CartController::class, 
'updateCart']);

// Transactions

Route::get('/m-history',[TransactionsController::class,
'index_transactions'])->name('showHistoryPage')->middleware('userM');

// Profile Page

Route::get('/m-profile', [ProfileController::class, 'viewProfile'])
->middleware('userM');

Route::get('/a-profile', [ProfileController::class, 'viewProfile2'])
->middleware('adminM');

Route::get('/editProfile', [ProfileController::class, 'editUserProfile'])
->middleware('userM');

Route::patch('/updateProfile', [ProfileController::class, 'updateUserProfile']);

Route::get('/editPassword', [ProfileController::class, 'editMemberPassword'])
->middleware('userM');

Route::patch('/updatePassword', [ProfileController::class, 'updateMemberPassword']);

Route::get('/editPassword2', [ProfileController::class, 'editAdminPassword'])
->middleware('adminM');

Route::patch('/updatePassword2', [ProfileController::class, 'updateAdminPassword']);