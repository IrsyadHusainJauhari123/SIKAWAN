<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PemerintahController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PariwisataController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\KebudayaanController;
use App\Http\Controllers\DataKecamatanController;
use app\http\Controllers;
use App\Models\Beranda;

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
    return view('/login');
});

Route::get('/components', function () {
    return view('components.admin');
});

Route::get('kalender', [CalenderController::class, 'index']);
Route::get('kalender-user', [CalenderController::class, 'indexuser']);
Route::post('kalender/action', [CalenderController::class, 'action']);

Route::get('/dashboard', [HomeController::class, 'showdashboard']);

// Route::post('/user', [UserController::class]);
Route::get('/profile', [HomeController::class, 'showprofile']);


Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

//ROUTE ADMIN//
Route::resource('/user', UserController::class);
Route::resource('/profil', ProfilController::class);
// Route::resource('/berita', BeritaController::class);
Route::resource('/kegiatan', KegiatanController::class);
Route::resource('/pemerintah', PemerintahController::class);
Route::resource('/kelurahan', KelurahanController::class);
// Route::resource('/beranda', BerandaController::class);
Route::resource('/layanan', LayananController::class);
// Route::resource('/pariwisata', PariwisataController::class);
Route::resource('/kebudayaan', KebudayaanController::class);
Route::resource('/pendidikan', PendidikanController::class);
Route::resource('/datakecamatan', DataKecamatanController::class);


Route::get('/pariwisata', [PariwisataController::class, 'index']);
Route::get('/pariwisata/create', [PariwisataController::class, 'create']);
Route::post('/pariwisata', [PariwisataController::class, 'store']);
Route::get('/pariwisata/{pariwisata}', [PariwisataController::class, 'show']);
Route::get('/pariwisata/{pariwisata}/edit', [PariwisataController::class, 'edit']);
Route::put('/pariwisata/{pariwisata}', [PariwisataController::class, 'update']);
Route::delete('/pariwisata/{pariwisata}', [PariwisataController::class, 'destroy']);
// Route::get('/layanan', [LayananController::class, 'index']);
// Route::get('/layanan/create', [LayananController::class, 'create']);
// Route::post('/layanan', [LayananController::class, 'store']);
// Route::get('/layanan/{layanan}', [LayananController::class, 'show']);
// Route::get('/layanan/{layanan}/edit', [LayananController::class, 'edit']);
// Route::put('/layanan/{layanan}', [LayananController::class, 'update']);
// Route::delete('/layanan/{layanan}', [LayananController::class, 'destroy']);

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/create', [BeritaController::class, 'create']);
Route::post('/berita', [BeritaController::class, 'store']);
Route::get('/berita/{berita}', [BeritaController::class, 'show']);
Route::get('/berita/{berita}/edit', [BeritaController::class, 'edit']);
Route::put('/berita/{berita}', [BeritaController::class, 'update']);
Route::delete('/berita/{berita}', [BeritaController::class, 'destroy']);

Route::post('/Berita', [ClientController::class, 'CariBerita']);
Route::post('/Kegiatan', [ClientController::class, 'CariKegiatan']);



Route::get('/beranda', [BerandaController::class, 'index']);
Route::get('/beranda/create', [BerandaController::class, 'create']);
Route::post('/beranda', [BerandaController::class, 'store']);
Route::get('/beranda/{beranda}', [BerandaController::class, 'show']);
Route::get('/beranda/{beranda}/edit', [BerandaController::class, 'edit']);
Route::put('/beranda/{beranda}', [BerandaController::class, 'update']);
Route::delete('/beranda/{beranda}', [BerandaController::class, 'destroy']);
// Route::get('kegiatan', [kegiatanController::class, 'index']);
// Route::get('/kegiatan/create', [KegiatanController::class, 'create']);
// Route::post('/kegiatan/simpan', [kegiatanController::class, 'store']);
// Route::get('/kegiatan/{kegiatan}/edit', [kegiatanController::class, 'edit']);
// Route::put('kegiatan/simpan/{kegiatan}', [kegiatanController::class, 'update']);
// Route::get('kegiatan/{kegiatan}', [kegiatanController::class, 'show']);
// Route::delete('kegiatan/{kegiatan}', [kegiatanController::class, 'destroy']);

//ROUTE CLIENT//
Route::get('/user/profile/visi-misi', [ClientController::class, 'VisiMisi']);
Route::get('/user/profile/struktur', [ClientController::class, 'Struktur']);
Route::get('/user/profile/tupoksi', [ClientController::class, 'Tupoksi']);
Route::get('/user/profile/sejarah', [ClientController::class, 'Sejarah']);

Route::get('/user/pemerintah/bupati', [ClientController::class, 'Bupati']);
Route::get('/user/pemerintah/wakilbupati', [ClientController::class, 'WakilBupati']);
Route::get('/user/pemerintah/camat', [ClientController::class, 'Camat']);
Route::get('/user/pemerintah/wakilcamat', [ClientController::class, 'WakilCamat']);


Route::get('/user/beranda/beranda', [ClientController::class, 'Beranda']);

Route::get('/user/berita/berita', [ClientController::class, 'Berita']);
// Route::get('/user/berita/{berita}', [ClientController::class, 'DetailBerita']);
// Route::get('user/berita/detailberita/{berita}', [ClientController::class, 'DetailBerita']);
Route::get('Berita/{berita}', [ClientController::class, 'DetailBerita']);
// Route::get('Kegiatan/{kegiatan}', [ClientController::class, 'DetailKegiatan']);
Route::get('Kegiatan/{kegiatan}', [ClientController::class, 'DetailKegiatan']);
Route::get('/user/berita/kegiatan', [ClientController::class, 'Kegiatan']);


Route::get('/user/kelurahan/kelurahan', [ClientController::class, 'Kelurahan']);

Route::get('/user/layanan/kk', [ClientController::class, 'Kk']);
Route::get('/user/layanan/ktp', [ClientController::class, 'Ktp']);
Route::get('/user/layanan/waris', [ClientController::class, 'Waris']);
Route::get('/user/layanan/nikah', [ClientController::class, 'Nikah']);
Route::get('/user/layanan/mikro', [ClientController::class, 'Mikro']);
Route::get('/user/layanan/informasi', [ClientController::class, 'Informasi']);
Route::get('/user/layanan/pensiun', [ClientController::class, 'Pensiun']);
Route::get('/user/layanan/penelitian', [ClientController::class, 'Penelitian']);

Route::get('/user/inovasi/kebudayaan', [ClientController::class, 'Kebudayaan']);
Route::post('/Kebudayaan', [ClientController::class, 'CariKebudayaan']);
Route::get('/user/inovasi/pariwisata', [ClientController::class, 'Pariwisata']);
Route::post('/Pariwisata', [ClientController::class, 'CariPariwisata']);
Route::get('pariwisata/{pariwisata}', [ClientController::class, 'DetailPariwisata']);
Route::get('/user/inovasi/pendidikan', [ClientController::class, 'Pendidikan']);
Route::post('/Pendidikan', [ClientController::class, 'CariPendidikan']);

Route::get('/user/laporan/rkt', [ClientController::class, 'Rkt']);
Route::get('/user/laporan/renstra', [ClientController::class, 'Renstra']);
Route::get('/user/laporan/lkjip', [ClientController::class, 'Lkjip']);
Route::get('/user/laporan/pj', [ClientController::class, 'Pj']);

Route::get('setting', [SettingController::class, 'index']);
Route::put('setting', [SettingController::class, 'store']);
