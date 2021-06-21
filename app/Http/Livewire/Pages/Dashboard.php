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
                'icon' => 'hhhhh'
            ],
            'Jumlah Member' => [
                'data' => Member::count(),
                'color' => 'orange',
                'icon' => 'bi bi-people-fill'
            ],
            'Pending' => [
                'data' => Borrow::where('status', '='. 0)->count(),
                'color' => 'yellow',
                'icon' => 'hhhhh'
            ],
            'Konfirmasi' => [
                'data' => Borrow::where('status', '='. 1)->count(),
                'color' => 'green',
                'icon' => 'hhhhh'
            ],
            'Sedang Dipinjam' => [
                'data' => Borrow::where('status', '='. 2)->count(),
                'color' => 'blue',
                'icon' => 'hhhhh'
            ]
        ];
    }
    public function render()
    {
        return view('livewire.pages.dashboard');
    }
}
