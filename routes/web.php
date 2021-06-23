<?php

use App\Http\Livewire\ErrorPages;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\DaftarBuku;
use App\Http\Livewire\Pages\DaftarSaran;
use App\Http\Livewire\Pages\DaftarUsulanBuku;
use App\Http\Livewire\Pages\Dashboard;
use App\Http\Livewire\Pages\PilihBuku;
use App\Http\Livewire\Pages\TambahBuku;
use App\Http\Livewire\Pages\UbahBuku;
use App\Http\Livewire\Pages\DaftarAnggota;
use App\Http\Livewire\Pages\DaftarDenda;
use App\Http\Livewire\Pages\DaftarKategori;
use App\Http\Livewire\Pages\Detail\DetailSaran;
use App\Http\Livewire\Pages\Detail\DetailUsulan;
use App\Http\Livewire\Pages\Kelas\DaftarKelas;
use App\Http\Livewire\Pages\Kelas\TambahKelas;
use App\Http\Livewire\Pages\Kelas\UbahKelas;
use App\Http\Livewire\Pages\Log\DetailLogBuku;
use App\Http\Livewire\Pages\Log\LogAjaran;
use App\Http\Livewire\Pages\Log\LogBuku;
use App\Http\Livewire\Pages\Log\LogKategori;
use App\Http\Livewire\Pages\Log\LogKelas;
use App\Http\Livewire\Pages\Log\LogMember;
use App\Http\Livewire\Pages\Log\LogPinjam;
use App\Http\Livewire\Pages\Member\DetailMember;
use App\Http\Livewire\Pages\Pinjam\DaftarPinjam;
use App\Http\Livewire\Pages\Pinjam\DetailPinjam;
use App\Http\Livewire\Pages\Tahun\DaftarTahunAjaran;
use App\Http\Livewire\Pages\Tahun\TambahTahunAjaran;
use App\Http\Livewire\Pages\Tahun\UbahTahun;
use App\Http\Livewire\Pages\TambahAnggota;
use App\Http\Livewire\Pages\TambahKategori;

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
Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    Route::get('/daftar-buku', DaftarBuku::class)->name('daftar-buku');
    Route::get('/daftar-saran', DaftarSaran::class)->name('daftar-saran');
    Route::get('/daftar-usulan-buku', DaftarUsulanBuku::class)->name('daftar-usulan-buku');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/pilih-buku', PilihBuku::class)->name('pilih-buku');
    Route::get('/tambah-buku', TambahBuku::class)->name('tambah-buku');
    Route::get('/tambah-kategori', TambahKategori::class)->name('tambah-kategori');
    Route::get('/daftar-kategori', DaftarKategori::class)->name('daftar-kategori');
    Route::get('/ubah-buku/{id}', UbahBuku::class)->name('ubah-buku');
    Route::get('/daftar-anggota', DaftarAnggota::class)->name('daftar-anggota');
    Route::get('/tambah-anggota', TambahAnggota::class)->name('tambah-anggota');
    Route::get('/daftar-tahun-ajaran', DaftarTahunAjaran::class)->name('daftar-tahun-ajaran');
    Route::get('/tambah-tahun-ajaran', TambahTahunAjaran::class)->name('tambah-tahun-ajaran');
    Route::get('/daftar-kelas', DaftarKelas::class)->name('daftar-kelas');
    Route::get('/tambah-kelas', TambahKelas::class)->name('tambah-kelas');
    Route::get('/ubah-kelas/{id}', UbahKelas::class)->name('ubah-kelas');
    Route::get('/pinjam/daftar-pinjam', DaftarPinjam::class)->name('daftar-pinjam');
    Route::get('/detail-member/{id}', DetailMember::class)->name('detail-member');
    Route::get('/detail-pinjam/{id}', DetailPinjam::class)->name('detail-pinjam');
    Route::get('/detail-saran/{id}', DetailSaran::class)->name('detail-saran');
    Route::get('/detail-usulan/{id}', DetailUsulan::class)->name('detail-usulan');
    Route::get('/log-buku', LogBuku::class)->name('log-buku');
    Route::get('/log-pinjam', LogPinjam::class)->name('log-pinjam');
    Route::get('/log-kategori', LogKategori::class)->name('log-kategori');
    Route::get('/log-kelas', LogKelas::class)->name('log-kelas');
    Route::get('/log-member', LogMember::class)->name('log-member');
    Route::get('/log-ajaran', LogAjaran::class)->name('log-ajaran');
    Route::get('/detail-log-buku/{id}', DetailLogBuku::class)->name('detail-log-buku');
    Route::get('/daftar-denda', DaftarDenda::class)->name('daftar-denda');
});
Route::get('/error', function(){
    return view('error-login');
})->name('error-login');



require __DIR__.'/auth.php';
