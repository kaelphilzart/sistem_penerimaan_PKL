<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\AdminController;

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
    return view('landingPage');
});



/*CSS*/
Route::get('/css/style.css', function () {
    return response(file_get_contents(public_path('assets/css/style.css')))->header('Content-Type', 'text/css');
});
Route::get('/css/sb-admin-2.css', function () {
    return response(file_get_contents(public_path('assets/css/sb-admin-2.css')))->header('Content-Type', 'text/css');
});
Route::get('/css/sb-admin-2.min.css', function () {
    return response(file_get_contents(public_path('assets/css/sb-admin-2.min.css')))->header('Content-Type', 'text/css');
});
Route::get('/fontawesome-free/css/all.min.css', function () {
    return response(file_get_contents(public_path('vendor/fontawesome-free/css/all.min.css')))->header('Content-Type', 'text/css');
});
Route::get('/img/logo-aptikma.png', function () {
    return response(file_get_contents(public_path('assets/img/logo-aptikma.png')))->header('Content-Type', 'file/png');
});
Route::get('/img/logo-sidebar.png', function () {
    return response(file_get_contents(public_path('assets/img/logo-sidebar.png')))->header('Content-Type', 'file/png');
});

    Route::middleware(['guest'])->group(function(){
        Route::get('formPage', function () {
            return view('formPage');
        }) -> name('formPage');
        Route::get('tentangKami', function () {
            return view('tentangKami');
        })-> name('tentangKami');

        Route::get('registrasi', function () {
            return view('registrasi');
        })-> name('registrasi');

        Route::get('landingPage', function () {
            return view('landingPage');
        })-> name('landingPage');

        Route::get('kontak', function () {
            return view('kontak');
        })-> name('kontak');

        Route::get('admin', [SessionController::class, 'login'])-> name('masuk');
        Route::get('/register', [SessionController::class, 'register'])-> name('register');
        Route::post('create-admin', [SessionController::class, 'createUser'])-> name('create-admin');
        Route::post('session', [SessionController::class, 'store'])-> name('login');
        Route::post('create-member', [MemberController::class, 'store'])-> name('create-membership');

        Route::post('daftar-magang', [MagangController::class, 'daftarMagang'])-> name('magang.daftar-magang');

    });

   
    Route::middleware(['auth'])->group(function () {
        // Rute untuk pengguna dengan tingkat 'admin'


        Route::middleware(['admin'])->group(function () {

            // Route::get('dashboard', [HomeController::class, 'dashboardAdmin'])-> name('home');
            Route::get('home', function () {
                return view('admin.home');
            })->name('home');

            Route::get('/logout', [SessionController::class, 'destroy'])-> name('logout');
            Route::get('createPage', [AdminController::class, 'createUser'])-> name('create');
            Route::post('create-user', [AdminController::class, 'store'])-> name('create-user');
            
            //tabel m_user
            Route::get('data-admin', [AdminController::class, 'index'])-> name('data-admin');
            Route::get('/m_user/edit/{id_user}', [AdminController::class, 'edit']) -> name('admin.edit');
            Route::post('/m_user/update/{id_user}', [AdminController::class, 'update']) -> name('admin.update');
            Route::post('/m_user/delete/{id_user}', [AdminController::class, 'destroy']) -> name('admin.hapus');
    
            
             //tabel c_magang
             Route::get('data-cmagang', [AdminController::class, 'indexC_magang'])-> name('data-cmagang');
             Route::get('data-anggota_magang', [AdminController::class, 'indexA_magang'])-> name('data-anggota_magang');
             Route::post('/anggota-magang/delete/{id_magang}', [AdminController::class, 'destroyA_magang']) -> name('hapus-anggota');
    
             Route::get('/t_membership/edit/{id_member}', [MemberController::class, 'edit']) -> name('member.edit');
             Route::post('/t_membership/update/{id_member}', [MemberController::class, 'update']) -> name('member.update');
             Route::post('/c_magang/delete/{id_cmagang}', [AdminController::class, 'destroyC_magang']) -> name('cmagang.tolak');
             Route::post('/c_magang/terima/{id_cmagang}', [MagangController::class, 'terima']) -> name('cmagang.terima');
      
        });
    
        Route::middleware(['magang'])->group(function () {
            Route::get('home-magang', function () {
                return view('admin.home_magang');
            })->name('home-magang');

            Route::get('logout-magang', [SessionController::class, 'destroyMagang'])-> name('logout-magang');
        });
    
        
    });