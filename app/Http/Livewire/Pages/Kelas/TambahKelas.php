<?php

namespace App\Http\Livewire\Pages\Kelas;

use App\Models\Kelas;
use App\Models\TahunAjaran;
use Illuminate\Support\Facades\Validator;
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
        $validatedData = Validator::make(
            [
                'id_tahun_pelajaran' => $this->tahun,
                'nama_kelas' => $this->kelas
            ],
            [
                'id_tahun_pelajaran' => 'required',
                'nama_kelas' => 'required'
            ],
            [
                'id_tahun_pelajaran.required' => 'Tahun ajaran tidak boleh kosong!',
                'nama_kelas.required' => 'Kelas tidak boleh kosong!'
            ],
        )->validate();
        Kelas::create($validatedData);

        $this->reset();
        $this->emit('refreshTable');
    }
}
