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
                'color' => 'red',
                'icon' => 'bi bi-book'
            ],
            'Jumlah Member' => [
                'data' => Member::count(),
                'color' => 'orange',
                'icon' => 'bi bi-people-fill'
            ],
            'Pending' => [
                'data' => Borrow::where('status', '='. 0)->count(),
                'color' => 'yellow',
                'icon' => 'bi bi-clock-history'
            ],
            'Konfirmasi' => [
                'data' => Borrow::where('status', '='. 1)->count(),
                'color' => 'green',
                'icon' => 'bi bi-check2-square'
            ],
            'Sedang Dipinjam' => [
                'data' => Borrow::where('status', '='. 2)->count(),
                'color' => 'blue',
                'icon' => 'bi bi-bag-check-fill'
            ]
        ];
    }
    public function render()
    {
        return view('livewire.pages.dashboard');
    }
}
