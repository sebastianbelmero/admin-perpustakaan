<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;
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
        $validatedData = Validator::make(
            ['nama' => $this->nama],
            ['nama' => 'required'],
            ['required' => 'Nama kategori tidak boleh kosong!'],
        )->validate();
        Category::create($validatedData);

        $this->reset();
        $this->emit('refreshTable');
    }

}
