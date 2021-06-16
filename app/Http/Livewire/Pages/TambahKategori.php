<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use Livewire\Component;

class TambahKategori extends Component
{
    public $nama;
    public function render()
    {
        return view('livewire.pages.tambah-kategori');
    }
    public function tambahKategori()
    {
        Category::create([
            'nama' => $this->nama
        ]);

        $this->reset();
        $this->emit('refreshTable');
    }

}
