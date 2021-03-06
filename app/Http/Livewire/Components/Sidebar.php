<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Sidebar extends Component
{
    public $links;

    public function mount()
    {
        $this->links = [
            "dashboard" => [
                "name" => "Dashboard",
                "route" => "dashboard",
                "icon" => "bi bi-house"
            ],
            "daftar-buku" => [
                "name" => "Daftar Buku",
                "route" => "daftar-buku",
                "icon" => "bi bi-journals"
            ],
            "tambah-buku" => [
                "name" => "Tambah Buku",
                "route" => "tambah-buku",
                "icon" => "bi bi-journal-plus"
            ],
            "pilih-buku" => [
                "name" => "Pilih Buku",
                "route" => "pilih-buku",
                "icon" => "bi bi-journal-check"
            ],
            "daftar-pinjam" => [
                "name" => "Peminjaman Buku",
                "route" => "daftar-pinjam",
                "icon" => "bi bi-journal-check"
            ],
            "daftar-kategori" => [
                "name" => "Kategori",
                "route" => "daftar-kategori",
                "icon" => "bi bi-journal-check"
            ],
            "daftar-saran" => [
                "name" => "Daftar Saran",
                "route" => "daftar-saran",
                "icon" => "bi bi-book"
            ],
            "daftar-usulan-buku" => [
                "name" => "Usulan Buku",
                "route" => "daftar-usulan-buku",
                "icon" => "bi bi-journal-medical"
            ],
            "daftar-tahun-ajaran" => [
                "name" => "Tahun Ajaran",
                "route" => "daftar-tahun-ajaran",
                "icon" => "bi bi-journal-medical"
            ],
            "daftar-kelas" => [
                "name" => "Kelas",
                "route" => "daftar-kelas",
                "icon" => "bi bi-journal-medical"
            ],
            "daftar-anggota" => [
                "name" => "Daftar Anggota",
                "route" => "daftar-anggota",
                "icon" => "bi bi-people-fill"
            ],
            "tambah-anggota" => [
                "name" => "Tambah Anggota",
                "route" => "tambah-anggota",
                "icon" => "bi bi-person-plus-fill"
            ],
        ];
    }

    public function render()
    {
        return view('livewire.components.sidebar');
    }
}
