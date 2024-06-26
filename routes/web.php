<?php

use App\Http\Controllers\FooterContentController;
use App\Http\Controllers\FooterTitleController;
use App\Http\Controllers\CarouselImageController;
use App\Http\Controllers\LocationController;
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
use Illuminate\Support\Facades\Auth;



use App\Http\Controllers\CartController;          
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\GeneralInfoController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TipoProductoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TransbankController;







Auth::routes();
//Route::post('/iniciar_compra', [TransbankController::class, 'iniciar_compra']);
Route::get('/shop', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
// Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// CALENDARIO
Route::get('/calendario', [App\Http\Controllers\calendarController::class, 'index'])->name('calendario');

Route::get('/', [LandingController::class, 'index'])->name('lnading');
// Route::get('/', function () {return redirect('/dashboard');})->middleware('auth');
	Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
	
	Route::resource('/tipo-productos', TipoProductoController::class)->middleware('auth');
	Route::resource('/products', ProductController::class)->middleware('auth');
	Route::resource('/roles', RoleController::class)->middleware('auth');
	Route::resource('/carousel-image', CarouselImageController::class)->middleware('auth');
	Route::resource('/footer-title', FooterTitleController::class)->middleware('auth');
	Route::resource('/footer-content', FooterContentController::class)->middleware('auth');
	
	
	
	// Route::middleware(['auth:sanctum', 'verified'])->group(function(){
	// 	Route::resource('/productos', ProductoController::class);
	// 	Route::get('/dashboard', function(){
	// 		return view('dashboard');
	// 	})->name('dashboard');
	// });
	


Route::group(['middleware' => 'auth'], function() {
	Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
	Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed']);
	Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
});

// Solo usuarios autenticados y con email verificado pueden acceder a las rutas dentro de este grupo
Route::group(['middleware' => ['auth', 'verified']], function () {
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	// Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static'); 
	Route::get('/profile-static', [CarouselImageController::class, 'index'])->name('profile-static'); 
	Route::post('/profile-static', [CarouselImageController::class, 'store'])->name('carousel.store'); 
	Route::put('/profile-static', [CarouselImageController::class, 'update'])->name('carousel.update'); 
	Route::delete('/profile-static', [CarouselImageController::class, 'destroy'])->name('carousel.destroy'); 
	// Route::get('/general-info', [PageController::class, 'update'])->name('general-info'); 
	Route::get('/general-info', [GeneralInfoController::class, 'show'])->name('general-info'); 
	Route::post('/general-info', [GeneralInfoController::class, 'update'])->name('general-info.update'); 
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static'); 
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
	Route::delete('/', [UserProfileController::class, 'delete'])->name('account.delete');
});


// Route::get('/products', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
Route::get('reporte_usuario',[ReportControler::class,'reporteus'])->name('reporte-usuarios');
Route::get('reporte_carro',[ReportControler::class,'reporteventa'])->name('reporte-carro');

//Route::resource('tipo-modulos', TipoModuloController::class);
//Route::resource('data', DataController::class);

Route::get('/provinces/{regionId}', [LocationController::class, 'getProvinces']);
Route::get('/communes/{provinceId}', [LocationController::class, 'getCommunes']);