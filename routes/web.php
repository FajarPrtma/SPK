<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ManajemenController;
use App\Http\Controllers\ProstuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\KuisController;
use Illuminate\Support\Facades\Route;

// Landing
Route::get('/', [LandingController::class, 'index'])->name('index');

// Auth
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/prostu', [ProstuController::class, 'index'])->name('dashboard.prostu');
// Route::get('/hasilsiswa', [LaporanController::class, 'hasil'])->name('dashboard.lapor.hasilsiswa');
// Route::get('/dashboard/kuis/user-results', [KuisController::class, 'userResults'])->name('dashboard.lapor.hasilsiswa');


Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'dasbor'])->name('dashboard.dasbor');
    Route::get('/index', [DashboardController::class, 'index'])->name('dashboard.index-admin');
    Route::get('/laporan', [LaporanController::class, 'index'])->name('dashboard.laporan');
    Route::get('/hasilsiswa', [LaporanController::class, 'hasil'])->name('dashboard.lapor.hasilsiswa');
    Route::get('/kuis', [DashboardController::class, 'kuis'])->name('dashboard.kuis.kuis');
    // Route::get('/eksplor', [ProstuController::class, 'eksplor'])->name('dashboard.prostu.eksplor');
    Route::get('/eksplor/{id}', [ProstuController::class, 'show'])->name('dashboard.prostu.eksplor');
    // Route::post('/kuisioner', [KuisController::class, 'store'])->name('dashboard.kuis.kuis.store');
    Route::get('/hasil', [KuisController::class, 'index'])->name('dashboard.kuis.results');
    Route::post('/result/store', [KuisController::class, 'store'])->name('dashboard.kuis.kuis.store');
    Route::get('/results', [KuisController::class, 'results'])->name('dashboard.kuis.results');
    Route::get('/dashboard/kuis/results/{id}', [KuisController::class, 'show'])->name('dashboard.kuis.results.show');
    Route::get('/index/{id}', [ProstuController::class, 'show'])->name('dashboard.layout.navbar');
    Route::get('/profile', [UserProfileController::class, 'index'])->name('dashboard.profile');
    Route::get('/profile/edit', [UserProfileController::class, 'edit'])->name('dashboard.profile.edit');
    Route::put('/dashboard/profile/update', [UserProfileController::class, 'update'])->name('dashboard.profile.update');
    Route::get('/profile/change-password', [UserProfileController::class, 'pass'])->name('dashboard.profile.changepass');
    Route::put('/changes-password', [UserProfileController::class, 'change'])->name('dashboard.profile.changepass.update');
    // Route::get('/dashboard/lapor/history', [KuisController::class, 'userResults'])->name('dashboard.lapor.history');
    Route::get('/hasilkuis/siswa', [LaporanController::class, 'hasilsiswa'])->name('dashboard.lapor.hasilsiswa');
    Route::get('/hasilkuis/admin', [LaporanController::class, 'hasiladmin'])->name('dashboard.lapor.hasiladmin');


    Route::middleware('roles:admin')->group(function(){

        Route::get('/getuser', [UserController::class, 'index'])->name('dashboard.mana.kelus');
        Route::post('/postuser', [UserController::class, 'index'])->name('dashboard.mana.kelus.store');
        Route::get('/kelolauser', [ManajemenController::class, 'kelolauser'])->name('dashboard.mana.kelus');
        Route::post('/createuser', [ManajemenController::class, 'store'])->name('dashboard.mana.kelus.store');
        Route::get('/tambahuser', [ManajemenController::class, 'tambah'])->name('dashboard.mana.index');
        Route::get('/edituser/{id}', [ManajemenController::class, 'edit'])->name('dashboard.mana.edit');
        Route::put('/editusers/{id}', [ManajemenController::class, 'update'])->name('dashboard.mana.edit.update');
        Route::delete('/deleteuser/{id}', [ManajemenController::class,'destroy'])->name('dashboard.mana.kelus.destroy');

        Route::get('/listkuis', [DashboardController::class, 'list'])->name('dashboard.kuis.listkuis');
        Route::get('/kelolakuis', [DashboardController::class, 'kelola'])->name('dashboard.kuis.kelolakuis');
        Route::post('/createkuis', [DashboardController::class, 'store'])->name('dashboard.kuis.kelolakuis.store');
        Route::get('/editkuisioner/{id}', [DashboardController::class, 'edit'])->name('dashboard.kuis.editkuis');
        Route::put('/editkuisioners/{id}', [DashboardController::class, 'update'])->name('dashboard.kuis.editkuis.update');
        Route::delete('/deleteukuisioner/{id}',[DashboardController::class,'destroy'])->name('dashboard.kuis.listkuis.destroy');
        // Route::post('/isikuis', [DashboardController::class, 'store'])->name('dashboard.kuis.kuis.store');

        Route::get('/arsip', [LaporanController::class, 'arsip'])->name('dashboard.lapor.arsip');

        Route::get('/manajemen', [ManajemenController::class, 'index'])->name('dashboard.manajemen');

        Route::get('/listpro', [ProstuController::class, 'list'])->name('dashboard.prostu.listpro');
        Route::get('/kelolapro', [ProstuController::class, 'kelola'])->name('dashboard.prostu.kelolapro');
        Route::post('/createpro', [ProstuController::class, 'store'])->name('dashboard.prostu.kelolapro.store');
        // Route::get('/tambahuser', [ProstuController::class, 'tambah'])->name('dashboard.mana.index');
        Route::get('/editpro/{id}', [ProstuController::class, 'edit'])->name('dashboard.prostu.editpro');
        Route::put('/editpros/{id}', [ProstuController::class, 'update'])->name('dashboard.prostu.editpro.update');
        Route::delete('/deletepro/{id}', [ProstuController::class,'destroy'])->name('dashboard.prostu.listpro.destroy');


    });

    Route::middleware('roles:siswa')->group(function(){
        // Rute untuk siswa
    });
});



// Route::middleware('auth')->group(function(){
//     Route::middleware('role:admin')->group(function(){
//         Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
//         // Add other admin routes here
//     });

//     Route::middleware('role:siswa')->group(function(){
//         Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
//         // Add other siswa routes here
//     });
// });


// Route::get('/', [LoginController::class, 'landing'])->name('landing');
// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/indexadmin', [DashboardController::class, 'index'])->name('dashboard.index-admin');

// Route::get('/dashboard', [DashboardController::class, 'dasbor'])->name('dashboard.dasbor');
// Route::get('/listkuis', [DashboardController::class, 'list'])->name('dashboard.kuis.listkuis');
// Route::get('/kelolakuis', [DashboardController::class, 'kelola'])->name('dashboard.kuis.kelolakuis');

// Route::get('/laporan', [LaporanController::class, 'index'])->name('dashboard.laporan');
// Route::get('/hasilsiswa', [LaporanController::class, 'hasil'])->name('dashboard.lapor.hasilsiswa');
// Route::get('/arsip', [LaporanController::class, 'arsip'])->name('dashboard.lapor.arsip');

// Route::get('/manajemen', [ManajemenController::class, 'index'])->name('dashboard.manajemen');
// Route::get('/kelolauser', [ManajemenController::class, 'kelolauser'])->name('dashboard.mana.kelus');
// Route::get('/kelolauser', [UserController::class, 'index'])->name('dashboard.mana.kelus');
// Route::post('/kelolauser', [UserController::class, 'store'])->name('dashboard.mana.kelus.store');
// Route::get('/kelolaperan', [ManajemenController::class, 'kelolaperan'])->name('dashboard.mana.kelper');

// Route::get('/prostu', [ProstuController::class, 'index'])->name('dashboard.prostu');
// Route::get('/listpro', [ProstuController::class, 'list'])->name('dashboard.prostu.listpro');
// Route::get('/kelolapro', [ProstuController::class, 'kelola'])->name('dashboard.prostu.kelolapro');

// Route::get('/kelolauser', [UserController::class, 'index'])->name('dashboard.mana.kelus');
// Route::post('/kelolauser', [UserController::class, 'store'])->name('dashboard.mana.kelus.store');
