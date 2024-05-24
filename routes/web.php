<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TampilanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//tampilan_awal
Route::get('/tampilan',[TampilanController::class, 'index'])->name('tampilan');

Route::get('/profile',[ProfileController::class, 'index'])->name('profile');

// Products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');


// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::get('/login/google', [AuthController::class, 'loginGoogle'])->name('login.google');
Route::get('/login/google/callback', [AuthController::class, 'loginGoogleCallback'])->name('callback_google');

// Dashboard
Route::prefix('dashboard')->middleware('authentication')->group(function () {


    //DetailProduct
   

    // Products
    Route::prefix('products')->middleware('role:superadmin|user')->group(function () {
        Route::get('/', [DashboardController::class, 'products'])->name('dashboard.products');
        Route::get('/add', [DashboardController::class, 'addProduct'])->name('dashboard.products.add');
        Route::post('/store', [DashboardController::class, 'storeProduct'])->name('dashboard.products.store');
        Route::get('/edit/{id}', [DashboardController::class, 'editProduct'])->name('dashboard.products.edit');
        Route::put('/update/{id}', [DashboardController::class, 'updateProduct'])->name('dashboard.products.update');
        Route::post('/delete/{id}', [DashboardController::class, 'deleteProduct'])->name('dashboard.products.delete');
        Route::get('/export', [DashboardController::class, 'exportProduct'])->name('dashboard.products.export');
         Route::get('/detail/{id}', [DashboardController::class, 'show'])->name('dashboard.products.detail');
         Route::get('checkout/{id}', [DashboardController::class, 'index'])->name('checkout');
    });

    // Users
    Route::prefix('users')->middleware('role:superadmin')->group(function () {
        Route::get('/', [DashboardController::class, 'users'])->name('dashboard.users');
        Route::get('/add', [DashboardController::class, 'addUser'])->name('dashboard.users.add');
        Route::post('/store', [DashboardController::class, 'storeUser'])->name('dashboard.users.store');
        Route::get('/edit/{id}', [DashboardController::class, 'editUser'])->name('dashboard.users.edit');
        Route::put('/update/{id}', [DashboardController::class, 'updateUser'])->name('dashboard.users.update');
        Route::post('/delete/{id}', [DashboardController::class, 'deleteUser'])->name('dashboard.users.delete');
    });

});


//tnasaction
Route::middleware(['auth'])->group(function () {
    Route::get('/transactions/detail/{id}', [TransactionController::class, 'index'])->name('transactions.index');
    Route::get('/transactions/checkout/{product_id}', [TransactionController::class, 'showCheckoutForm'])->name('transactions.showCheckoutForm');
    Route::post('/transactions/checkout', [TransactionController::class, 'checkout'])->name('transactions.checkout');
});