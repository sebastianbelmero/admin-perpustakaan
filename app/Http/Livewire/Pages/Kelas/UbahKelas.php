<?php

namespace App\Http\Livewire\Pages\Kelas;

use App\Models\Kelas;
use App\Models\TahunAjaran;
use Livewire\Component;

class UbahKelas extends Component
{
    public $idNya;
    public $kelas;
    public $idTahunPelajaran;
    
    public $class;
    public function mount($id)
    {
        $this->idNya = $id;
        $this->class = "px-2 py-1 w-full rounded dark:bg-gray-600 dark:text-white";
        $kelas = Kelas::findOrFail($this->idNya);
        $this->kelas = $kelas['nama_kelas'];
        $this->idTahunPelajaran = $kelas['id_tahun_pelajaran'];
        
    }
    public function render()
    {
        $tahun = TahunAjaran::all();
        return view('livewire.pages.kelas.ubah-kelas', compact('tahun'));
    }
    public function simpan()
    {
        $data = Kelas::find($this->idNya);
        $data->nama_kelas = $this->kelas;
        $data->id_tahun_pelajaran = $this->idTahunPelajaran;
        $data->save();
        return redirect()->route('daftar-kelas');
    }
}
