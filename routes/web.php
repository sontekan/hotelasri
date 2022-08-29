<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\TipeKamarController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;



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



//RegistrasiController
// Route::get('login', [LoginController::class, 'index'])->name('login');
// Route::post('login', [LoginController::class, 'authenticate']);

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::post('logoutuser', [LoginController::class, 'logout_user']);

// //RegistrasiController 
// Route::resource('register', RegisterController::class);

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth','verified','checkrole:admin,resepsionis']], function() {
    //DashboardController
    Route::resource('dashboard', DashboardController::class);
    Route::get('transaksi/export/',[DashboardController::class, 'export'] );
    // Route::get('dashboard/{order_id}/payment-success', [DashboardController::class, 'index']);
    // Route::post('logoutadmin', [LoginController::class, 'logout_admin']);
     //PemesananController
     Route::resource('pemesanan', PemesananController::class);
     Route::post('pemesanan-online',[PemesananController::class, 'store_online'] );
     Route::get('pemesanan/available-rooms/{checkin}/{checkout}',[PemesananController::class,'available_rooms']);
     Route::get('pemesanan/{id}/delete',[PemesananController::class,'destroy']);
    //  Route::get('booking/list-pesanan',[PemesananController::class,'list_payment']);
     Route::get('booking/{id}/tambah-tamu',[PemesananController::class,'reservasi_online']);
});

Route::group(['middleware' => ['auth','verified','checkrole:admin']], function() {
    //KamarController
    Route::get('kamar/{id}/delete',[KamarController::class,'destroy']);
    Route::resource('kamar', KamarController::class);
    //TipeKamarController
    Route::get('tipekamar/{id}/delete',[TipeKamarController::class,'destroy']);
    Route::get('tipekamar/galery',[TipeKamarController::class,'add_galery']);
    Route::post('tipekamar/galery',[TipeKamarController::class,'addgalery']);
    Route::resource('tipekamar', TipeKamarController::class);
    //PenggunaController
    Route::get('user',[UserController::class, 'index'] );
    Route::get('user/{id}/edit',[UserController::class, 'edit'] );
    Route::put('user/{id}',[UserController::class, 'update'] );
    Route::get('user/{id}/delete',[UserController::class, 'destroy'] );
  });

  Route::group(['middleware' => ['auth','verified','checkrole:member,admin']], function() {
    // Route::resource('dashboard', DashboardController::class);
    Route::get('booking/cek-kamar',[PemesananController::class,'cekkamar']);
     Route::post('booking/kamar-tersedia',[PemesananController::class,'kamar_tersedia']);
     Route::get('booking/{id}/pesan',[PemesananController::class,'pesan']);
     Route::get('booking/payment',[PemesananController::class,'payment']);
     Route::post('booking/payment',[PemesananController::class,'paymentpost']);
    //  Route::get('booking/payment',[PemesananController::class,'paymentpost']);
    Route::get('booking/{id}/payment-success', [PemesananController::class, 'payment_success']);
    Route::get('booking/{id}/payment-pending', [PemesananController::class, 'payment_pending']);
    Route::get('detail/{id}', [TipeKamarController::class, 'show']);
    Route::get('user/{id}/riwayat-transaksi', [PemesananController::class, 'riwayat_transaksi']);
  });

