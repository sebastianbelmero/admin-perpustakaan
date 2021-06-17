<?php

namespace App\Http\Livewire\Pages\Tahun;

use App\Models\TahunAjaran;
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
        TahunAjaran::create([
            'tahun' => $this->tahun
        ]);

        $this->reset();
        $this->emit('refreshTable');
    }
}
