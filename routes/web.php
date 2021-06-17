<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\DaftarBuku;
use App\Http\Livewire\Pages\DaftarSaran;
use App\Http\Livewire\Pages\DaftarUsulanBuku;
use App\Http\Livewire\Pages\Dashboard;
use App\Http\Livewire\Pages\PilihBuku;
use App\Http\Livewire\Pages\TambahBuku;
use App\Http\Livewire\Pages\UbahBuku;
use App\Http\Livewire\Pages\DaftarAnggota;
use App\Http\Livewire\Pages\DaftarKategori;
use App\Http\Livewire\Pages\Kelas\DaftarKelas;
use App\Http\Livewire\Pages\Kelas\TambahKelas;
use App\Http\Livewire\Pages\Tahun\DaftarTahunAjaran;
use App\Http\Livewire\Pages\Tahun\TambahTahunAjaran;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/daftar-buku', DaftarBuku::class)->name('daftar-buku');
    Route::get('/daftar-saran', DaftarSaran::class)->name('daftar-saran');
    Route::get('/daftar-usulan-buku', DaftarUsulanBuku::class)->name('daftar-usulan-buku');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
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
});



require __DIR__.'/auth.php';
