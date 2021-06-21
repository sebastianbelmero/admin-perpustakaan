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
                'icon' => 'bi bi-book'
            ],
            'Jumlah Member' => [
                'data' => Member::count(),
                'route' => 'daftar-anggota',
                'color' => 'orange',
                'icon' => 'bi bi-people-fill'
            ],
            'Pending' => [
                'data' => Borrow::where('status', '=', 0)->count(),
                'route' => 'daftar-pinjam',
                'color' => 'yellow',
                'icon' => 'bi bi-clock-history'
            ],
            'Konfirmasi' => [
                'data' => Borrow::where('status', '=', 1)->count(),
                'route' => 'daftar-pinjam',
                'color' => 'green',
                'icon' => 'bi bi-check2-square'
            ],
            'Sedang Dipinjam' => [
                'data' => Borrow::where('status', '=', 2)->count(),
                'route' => 'daftar-pinjam',
                'color' => 'blue',
                'icon' => 'bi bi-bag-check-fill'
            ],
            'Log Buku' => [
                'data' => '',
                'route' => 'log-buku',
                'color' => 'blue',
                'icon' => 'bi bi-clock-history'
            ],
            'Log Kategori' => [
                'data' => '',
                'route' => 'log-kategori',
                'color' => 'blue',
                'icon' => 'bi bi-clock-history'
            ],
            'Log Kelas' => [
                'data' => '',
                'route' => 'log-kelas',
                'color' => 'blue',
                'icon' => 'bi bi-clock-history'
            ],
            'Log Member' => [
                'data' => '',
                'route' => 'log-member',
                'color' => 'blue',
                'icon' => 'bi bi-clock-history'
            ],
            'Log Tahun Ajaran' => [
                'data' => '',
                'route' => 'log-ajaran',
                'color' => 'blue',
                'icon' => 'bi bi-clock-history'
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
