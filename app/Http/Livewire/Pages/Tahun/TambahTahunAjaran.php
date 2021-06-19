<?php

namespace App\Http\Livewire\Pages\Tahun;

use App\Models\TahunAjaran;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class TambahTahunAjaran extends Component
{
    public $tahun;

    public function render()
    {
        return view('livewire.pages.tahun.tambah-tahun-ajaran');
    }

    public function tambahTahunAjaran()
    {
        $validatedData = Validator::make(
            ['tahun' => $this->tahun],
            ['tahun' => 'required'],
            ['required' => 'Tahun ajaran tidak boleh kosong!'],
        )->validate();
        TahunAjaran::create($validatedData);

        $this->reset();
        $this->emit('refreshTable');
    }
}
