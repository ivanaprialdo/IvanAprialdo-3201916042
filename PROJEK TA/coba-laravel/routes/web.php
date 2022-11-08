<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\bPJAdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminPesanController;
use App\Http\Controllers\DataJemaatController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\BidangPelayananController;
use App\Http\Controllers\DataJemaatAdminController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\JadwalIbadahAdminController;
use App\Http\Controllers\KeuanganController;
use App\Models\Post;
use Dflydev\DotAccessData\Data;

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
    $post =  Post::all()->take(3);
    return view('home', [
        "title" => "Home",
        "post" => $post,
        "active" => 'home'
    ]);
});



Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        "name" => "Ivan Aprialdo",
        "email" => "ivanaprialdo6789@gmail.com",
        "image" => "ivan.jpg"

    ]);
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/lupapassword', [LoginController::class, 'lupapassword'])->name('lupapassword');
    Route::post('/lupapassword', [LoginController::class, 'lupapasswordproses'])->name('lupapassword.proses');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/keuangan', [KeuanganController::class, 'index']);
    Route::group(['middleware' => ['role:staf_tu']], function () {
        Route::get('/kontak/index', [KontakController::class, 'index']);
        Route::post('/kontak/store', [KontakController::class, 'store']);
    });
    Route::group(['prefix' => 'dashboard'], function () {

        Route::get('/', function () {
            return view('dashboard.index');
        });

        Route::group(['middleware' => ['role:staf_tu']], function () {
            Route::get('/datajemaat', [DataJemaatAdminController::class, 'index']);
            Route::group(['prefix' => 'jadwalibadah'], function () {
                Route::get('/', [JadwalIbadahAdminController::class, 'index']);
                Route::get('/ibadahkeluarga', [JadwalIbadahAdminController::class, 'ibadahkeluarga']);
                Route::get('/ibadahmingguraya', [JadwalIbadahAdminController::class, 'ibadahmingguraya']);
                Route::get('/ibadahpemuda', [JadwalIbadahAdminController::class, 'ibadahpemuda']);
                Route::get('/ibadahperkaria', [JadwalIbadahAdminController::class, 'ibadahperkaria']);
                Route::get('/ibadahperkauan', [JadwalIbadahAdminController::class, 'ibadahperkauan']);
                Route::get('/ibadahpersekutuan', [JadwalIbadahAdminController::class, 'ibadahpersekutuan']);
                Route::get('/ibadahremaja', [JadwalIbadahAdminController::class, 'ibadahremaja']);
                Route::get('/ibadahsekolahminggu', [JadwalIbadahAdminController::class, 'ibadahsekolahminggu']);

                Route::post('/ibadahremaja', [JadwalIbadahAdminController::class, 'buatA']);
                Route::post('/ikeluarga', [JadwalIbadahAdminController::class, 'buatC']);
                Route::post('/iminggu', [JadwalIbadahAdminController::class, 'buatG']);
                Route::post('/ipemuda', [JadwalIbadahAdminController::class, 'buatF']);
                Route::post('/iperkaria', [JadwalIbadahAdminController::class, 'buatB']);
                Route::post('/iperkauan', [JadwalIbadahAdminController::class, 'buatE']);
                Route::post('/ipersedoapemuda', [JadwalIbadahAdminController::class, 'buatD']);
                Route::post('/isekolah', [JadwalIbadahAdminController::class, 'buatH']);
            });
            Route::get('/destroy/{id}', [JadwalIbadahAdminController::class, 'destroy']);
            Route::get('/pesan', [AdminPesanController::class, 'index']);

            // pendataan Jemaat
            Route::get('/datajemaat/tambahdatajemaat', [DataJemaatAdminController::class, 'tambah']);
            Route::get('/galery', [GaleryController::class, 'index']);
            Route::get('/galery/create', [GaleryController::class, 'create']);
            Route::post('/galery/store', [GaleryController::class, 'store']);
            Route::resource('/kontak', KontakController::class);
            Route::resource('/categories', AdminCategoryController::class)->except('show');

          
        });

        Route::get('/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);

        Route::group(['prefix' => 'badanpengurusjemaat'], function () {
            Route::get('/', [BpjAdminController::class, 'index']);
            Route::get('/penasehat', [BpjAdminController::class, 'penasehat']);
            Route::get('/pengembalaan', [BpjAdminController::class, 'pengembalaan']);
            Route::get('/pengurusinti', [BpjAdminController::class, 'pengurusinti']);
            Route::get('/seksiseksi', [BpjAdminController::class, 'seksipelayanan']);
            Route::post('/penasehat', [BpjAdminController::class, 'buatpenasehat']);
            Route::post('/pengembalaan', [BpjAdminController::class, 'buatpengembalaan']);
            Route::post('/pengurusinti', [BpjAdminController::class, 'buatpengurusinti']);
            Route::post('/seksiseksi', [BpjAdminController::class, 'buatseksipelayanan']);
        });


        Route::group(['prefix' => 'bidangpelayanan'], function () {
            Route::get('/', [BidangPelayananController::class, 'index']);
            Route::get('/pelayanananak', [BidangPelayananController::class, 'pelayanananak']);
            Route::get('/pelayananpemuda', [BidangPelayananController::class, 'pelayananpemuda']);
            Route::get('/pelayananperkaria', [BidangPelayananController::class, 'pelayananperkaria']);
            Route::get('/pelayananperkauan', [BidangPelayananController::class, 'pelayananperkauan']);
            Route::get('/pelayananremaja', [BidangPelayananController::class, 'pelayananremaja']);
            Route::post('/pelayanananak', [BidangpelayananController::class, 'buatpelayanananak']);
            Route::post('/pelayananpemuda', [BidangPelayananController::class, 'buatpelayananpemuda']);
            Route::post('/pelayananperkaria', [BidangPelayananController::class, 'buatpelayananperkaria']);
            Route::post('/pelayananperkauan', [BidangPelayananController::class, 'buatpelayananperkauan']);
            Route::post('/pelayananremaja', [BidangPelayananController::class, 'buatpelayananremaja']);
        });

        Route::resource('/posts', DashboardPostController::class);
    });

    Route::post('/logout', [LoginController::class, 'logout']);
});

// contoh
Route::get('/bidangpelayanan', [HomeController::class, 'bidangpelayanan']);
Route::get('/bpj', [HomeController::class, 'bpj']);
Route::get('/badanpengurusjemaat/editpengembalaan/{id}',[BPJAdminController::class,'editpengembalaan']);
Route::get('/pengembalaan/hapus/{id}',[BPJAdminController::class,'hapuspengembalaan']);
Route::put('/dashboard/badanpengurusjemaat/pengembalaan/{id}',[BPJAdminController::class,'updatepengembalaan']);

Route::get('/badanpengurusjemaat/editpenasehat/{id}',[BPJAdminController::class,'editpenasehat']);
Route::put('/dashboard/badanpengurusjemaat/penasehat/{id}',[BPJAdminController::class,'updatepenasehat']);
Route::get('/penasehat/hapus/{id}',[BPJAdminController::class,'hapuspenasehat']);

Route::get('/badanpengurusjemaat/editpengurusinti/{id}',[BPJAdminController::class,'editpengurusinti']);
Route::put('/dashboard/badanpengurusjemaat/pengurusinti/{id}',[BPJAdminController::class,'updatepengurusinti']);
Route::get('/pengurusinti/hapus/{id}',[BPJAdminController::class,'hapuspengurusinti']);

Route::get('/badanpengurusjemaat/editseksipelayanan/{id}',[BPJAdminController::class,'editseksipelayanan']);
Route::put('/dashboard/badanpengurusjemaat/seksipelayanan/{id}',[BPJAdminController::class,'updateseksipelayanan']);
Route::get('/seksipelayanan/hapus/{id}',[BPJAdminController::class,'hapusseksipelayanan']);

Route::get('/bidangpelayanan/editpelayanananak/{id}',[BidangPelayananController::class,'editpelayanananak']);
Route::put('/dashboard/bidangpelayanan/pelayanananak/{id}',[BidangPelayananController::class,'updatepelayanananak']);
Route::get('/pelayanananak/hapus/{id}',[BidangPelayananController::class,'hapuspelayanananak']);

Route::get('/bidangpelayanan/editpelayananremaja/{id}',[BidangPelayananController::class,'editpelayananremaja']);
Route::put('/dashboard/bidangpelayanan/pelayananremaja/{id}',[BidangPelayananController::class,'updatepelayananremaja']);
Route::get('/pelayananremaja/hapus/{id}',[BidangPelayananController::class,'hapuspelayananremaja']);

Route::get('/bidangpelayanan/editpelayananpemuda/{id}',[BidangPelayananController::class,'editpelayananpemuda']);
Route::put('/dashboard/bidangpelayanan/pelayananpemuda/{id}',[BidangPelayananController::class,'updatepelayananpemuda']);
Route::get('/pelayananpemuda/hapus/{id}',[BidangPelayananController::class,'hapuspelayananpemuda']);

Route::get('/bidangpelayanan/editpelayananperkaria/{id}',[BidangPelayananController::class,'editpelayananperkaria']);
Route::put('/dashboard/bidangpelayanan/pelayananperkaria/{id}',[BidangPelayananController::class,'updatepelayananperkaria']);
Route::get('/pelayananperkaria/hapus/{id}',[BidangPelayananController::class,'hapuspelayananperkaria']);

Route::get('/bidangpelayanan/editpelayananperkauan/{id}',[BidangPelayananController::class,'editpelayananperkauan']);
Route::put('/dashboard/bidangpelayanan/pelayananperkauan/{id}',[BidangPelayananController::class,'updatepelayananperkauan']);
Route::get('/pelayananperkauan/hapus/{id}',[BidangPelayananController::class,'hapuspelayananperkauan']);

Route::get('/jadwalibadah/editibadahremaja/{id}',[JadwalIbadahAdminController::class,'editibadahremaja']);
Route::put('/dashboard/jadwalibadah/ibadahremaja/{id}',[JadwalIbadahAdminController::class,'updateibadahremaja']);
Route::get('/ibadahremaja/hapus/{id}',[JadwalIbadahAdminController::class,'hapusibadahremaja']);

Route::get('/jadwalibadah/editibadahperkaria/{id}',[JadwalIbadahAdminController::class,'editibadahperkaria']);
Route::put('/dashboard/jadwalibadah/ibadahperkaria/{id}',[JadwalIbadahAdminController::class,'updateibadahperkaria']);
Route::get('/ibadahperkaria/hapus/{id}',[JadwalIbadahAdminController::class,'hapusibadahperkaria']);

Route::get('/jadwalibadah/editibadahkeluarga/{id}',[JadwalIbadahAdminController::class,'editibadahkeluarga']);
Route::put('/dashboard/jadwalibadah/ibadahkeluarga/{id}',[JadwalIbadahAdminController::class,'updateibadahkeluarga']);
Route::get('/ibadahkeluarga/hapus/{id}',[JadwalIbadahAdminController::class,'hapusibadahkeluarga']);

Route::get('/jadwalibadah/editibadahpersekutuan/{id}',[JadwalIbadahAdminController::class,'editibadahpersekutuan']);
Route::put('/dashboard/jadwalibadah/ibadahpersekutuan/{id}',[JadwalIbadahAdminController::class,'updateibadahpersekutuan']);
Route::get('/ibadahpersekutuan/hapus/{id}',[JadwalIbadahAdminController::class,'hapusibadahpersekutuan']);

Route::get('/jadwalibadah/editibadahperkauan/{id}',[JadwalIbadahAdminController::class,'editibadahperkauan']);
Route::put('/dashboard/jadwalibadah/ibadahperkauan/{id}',[JadwalIbadahAdminController::class,'updateibadahperkauan']);
Route::get('/ibadahperkauan/hapus/{id}',[JadwalIbadahAdminController::class,'hapusibadahperkauan']);

Route::get('/jadwalibadah/editibadahpemuda/{id}',[JadwalIbadahAdminController::class,'editibadahpemuda']);
Route::put('/dashboard/jadwalibadah/ibadahpemuda/{id}',[JadwalIbadahAdminController::class,'updateibadahpemuda']);
Route::get('/ibadahpemuda/hapus/{id}',[JadwalIbadahAdminController::class,'hapusibadahpemuda']);

Route::get('/jadwalibadah/editibadahsekolahminggu/{id}',[JadwalIbadahAdminController::class,'editibadahsekolahminggu']);
Route::put('/dashboard/jadwalibadah/ibadahsekolahminggu/{id}',[JadwalIbadahAdminController::class,'updateibadahsekolahminggu']);
Route::get('/ibadahsekolahminggu/hapus/{id}',[JadwalIbadahAdminController::class,'hapusibadahsekolahminggu']);

Route::get('/jadwalibadah/editibadahmingguraya/{id}',[JadwalIbadahAdminController::class,'editibadahmingguraya']);
Route::put('/dashboard/jadwalibadah/ibadahmingguraya/{id}',[JadwalIbadahAdminController::class,'updateibadahmingguraya']);
Route::get('/ibadahmingguraya/hapus/{id}',[JadwalIbadahAdminController::class,'hapusibadahmingguraya']);


// Route::get('/dashboard/datajemaat', [DataJemaatAdminController::class, 'index']);
// Route::get('/dashboard/destroy/{id}', [JadwalIbadahAdminController::class, 'destroy']);
// Route::get('/dashboard/jadwalibadah', [JadwalIbadahAdminController::class, 'index']);
// Route::get('/dashboard/jadwalibadah/ibadahkeluarga', [JadwalIbadahAdminController::class, 'ibadahkeluarga']);
// Route::get('/dashboard/jadwalibadah/ibadahmingguraya', [JadwalIbadahAdminController::class, 'ibadahmingguraya']);
// Route::get('/dashboard/jadwalibadah/ibadahpemuda', [JadwalIbadahAdminController::class, 'ibadahpemuda']);
// Route::get('/dashboard/jadwalibadah/ibadahperkaria', [JadwalIbadahAdminController::class, 'ibadahperkaria']);
// Route::get('/dashboard/jadwalibadah/ibadahperkauan', [JadwalIbadahAdminController::class, 'ibadahperkauan']);
// Route::get('/dashboard/jadwalibadah/ibadahpersekutuan', [JadwalIbadahAdminController::class, 'ibadahpersekutuan']);
// Route::get('/dashboard/jadwalibadah/ibadahremaja', [JadwalIbadahAdminController::class, 'ibadahremaja']);
// Route::get('/dashboard/jadwalibadah/ibadahsekolahminggu', [JadwalIbadahAdminController::class, 'ibadahsekolahminggu']);
// Route::get('/dashboard/pesan', [AdminPesanController::class, 'index']);
Route::get('/datajemaat/edit/{id}',[DataJemaatAdminController::class,'edit']);
Route::put('/dashboard/datajemaat/tambahdatajemaat/{id}',[DataJemaatAdminController::class,'updatedatajemaat']);

Route::get('/datajemaat/destroy/{id}', [DataJemaatAdminController::class, 'destroy']);

Route::get('/galery', [HomeController::class, 'galery']);
Route::get('/galery/edit/{id}',[GaleryController::class,'edit']);
Route::put('/galery/update/{id}',[GaleryController::class,'update']);
Route::get('/galery/destroy/{id}',[GaleryController::class,'destroy']);

Route::get('/halamanpendataan', [HomeController::class, 'halamanpendataan']);
Route::get('/jadwalkebaktian', [HomeController::class, 'jadwalkebaktian']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/kontak/create', [KontakController::class, 'create']);
Route::get('/kontak/destroy/{id}', [KontakController::class, 'destroy']);
Route::get('/kontak/edit/{id}', [KontakController::class, 'edit']);

Route::get('/laporankeuangan', [HomeController::class, 'laporankeuangan']);
Route::get('/pengembalaan/create', [PengembalaanController::class, 'create']);
Route::get('/pesan/destroy/{id}', [AdminPesanController::class, 'destroy']);
Route::get('/sejarah', [HomeController::class, 'sejarah']);
Route::get('/visimisi', [HomeController::class, 'visimisi']);
Route::get('/wartajemaat', [HomeController::class, 'wartajemaat']);

Route::post('/halamanpendataan', [DataJemaatController::class, 'create']);

Route::post('/pesan', [PesanController::class, 'create']);



// route BPJ


//keuangan controller

Route::get('/bulanan', [KeuanganController::class, 'bulanan']);
Route::get('/bulanan/tambah', [KeuanganController::class, 'bulanan_tambah']);
Route::post('/bulanan/create', [KeuanganController::class, 'bulanan_create']);
Route::get('/bulanan/edit/{id}', [KeuanganController::class, 'bulanan_edit']);
Route::get('/bulanan/hapus/{id}',[KeuanganController::class,'hapusbulanan']);

Route::put('/pemasukan/bulanan/{id}',[KeuanganController::class,'bulananupdate']);

Route::get('/kolekte', [KeuanganController::class, 'kolekte']);
Route::get('/kolekte/tambah', [KeuanganController::class, 'kolekte_tambah']);
Route::post('/kolekte/create', [KeuanganController::class, 'kolekte_create']);
Route::get('/kolekte/edit/{id}', [KeuanganController::class, 'kolekte_edit']);
Route::get('/kolekte/hapus/{id}',[KeuanganController::class,'hapuskolekte']);

Route::put('/pemasukan/kolekte/{id}',[KeuanganController::class,'kolekteupdate']);

Route::get('/persepuluhan', [KeuanganController::class, 'persepuluhan']);
Route::get('/persepuluhan/tambah', [KeuanganController::class, 'persepuluhan_tambah']);
Route::post('/persepuluhan/create', [KeuanganController::class, 'persepuluhan_create']);
Route::get('/persepuluhan/edit/{id}', [KeuanganController::class, 'persepuluhan_edit']);
Route::get('/persepuluhan/hapus/{id}',[KeuanganController::class,'hapuspersepuluhan']);
Route::put('/pemasukan/persepuluhan/{id}',[KeuanganController::class,'persepuluhanupdate']);

// Route::resource('/bulananupdate',[KeuanganController::class,'bulananupdate']);

// galery
