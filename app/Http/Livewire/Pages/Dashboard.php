<?php

namespace App\Http\Livewire\Pages;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\Member;
use Livewire\Component;

class Dashboard extends Component
{
    public $links;

    public function mount()
    {
        $this->links = [
            'Jumlah Buku' => [
                'data' => Book::count(),
                'route' => 'daftar-buku',
                'color' => 'red',
                'icon' => 'fas fa-book'
            ],
            'Jumlah Member' => [
                'data' => Member::count(),
                'route' => 'daftar-anggota',
                'color' => 'orange',
                'icon' => 'fas fa-users'
            ],
            'Pending' => [
                'data' => Borrow::where('status', '=', 0)->count(),
                'route' => 'daftar-pinjam',
                'color' => 'yellow',
                'icon' => 'fas fa-spinner'
            ],
            'Konfirmasi' => [
                'data' => Borrow::where('status', '=', 1)->count(),
                'route' => 'daftar-pinjam',
                'color' => 'green',
                'icon' => 'fas fa-check'
            ],
            'Sedang Dipinjam' => [
                'data' => Borrow::where('status', '=', 2)->count(),
                'route' => 'daftar-pinjam',
                'color' => 'blue',
                'icon' => 'fas fa-clipboard-check'
            ],
            'Daftar Denda' => [
                'data' => '',
                'route' => 'daftar-denda',
                'color' => 'blue',
                'icon' => 'fas fa-dollar-sign'
            ],
            'Log Buku' => [
                'data' => '',
                'route' => 'log-buku',
                'color' => 'blue',
                'icon' => 'fas fa-history'
            ],
            'Log Kategori' => [
                'data' => '',
                'route' => 'log-kategori',
                'color' => 'blue',
                'icon' => 'fas fa-history'
            ],
            'Log Kelas' => [
                'data' => '',
                'route' => 'log-kelas',
                'color' => 'blue',
                'icon' => 'fas fa-history'
            ],
            'Log Member' => [
                'data' => '',
                'route' => 'log-member',
                'color' => 'blue',
                'icon' => 'fas fa-history'
            ],
            'Log Tahun Ajaran' => [
                'data' => '',
                'route' => 'log-ajaran',
                'color' => 'blue',
                'icon' => 'fas fa-history'
            ]
        ];
    }

    public function render()
    {
        return view('livewire.pages.dashboard');
    }

    public function pindah($route)
    {
        return redirect()->route($route);
    }
}
