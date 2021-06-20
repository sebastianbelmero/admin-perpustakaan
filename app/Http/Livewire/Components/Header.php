<?php

namespace App\Http\Livewire\Components;

use App\Models\Borrow;
use Livewire\Component;

class Header extends Component
{
    public $notifikasi;
    public function mount()
    {
        $this->notifikasi = [
            'Pending Peminjaman' => [
                'data' => Borrow::where('status', '=', 0)->count(),
                'route' => 'daftar-pinjam'
            ]
        ];     
    }
    public function render()
    {
        return view('livewire.components.header', );
    }
}
