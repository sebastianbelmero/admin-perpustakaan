<?php

namespace App\Http\Livewire\Pages\Kelas;

use App\Models\Kelas;
use App\Models\TahunAjaran;
use Livewire\Component;

class TambahKelas extends Component
{
    public $tahun, $kelas;

    public function render()
    {
        $collection = TahunAjaran::all();
        return view('livewire.pages.kelas.tambah-kelas', compact('collection'));
    }

    public function tambahTahunAjaran()
    {
        Kelas::create([
            'id_tahun_pelajaran' => $this->tahun,
            'nama_kelas' => $this->kelas
        ]);

        $this->reset();
        $this->emit('refreshTable');
    }
}
