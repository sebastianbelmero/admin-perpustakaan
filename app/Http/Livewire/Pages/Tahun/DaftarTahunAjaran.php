<?php

namespace App\Http\Livewire\Pages\Tahun;

use App\Models\TahunAjaran;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarTahunAjaran extends Component
{
    use WithPagination;

    protected $listeners = ['pilihIdTahun']; // Wajib

    public $updateId=0;
    public $tahun=0;
    public $idnya; // Wajib
    public $ada = false; // Wajib

    public function render()
    {

        // pilih modelnya
        $model = "App\Models\TahunAjaran"; // Wajib
        $data = TahunAjaran::first(); // Wajib
        if (!$data) {
            return view('livewire.pages.tahun.daftar-tahun-ajaran');
        } else {
            $this->ada = true;
            $collection = $data->toJson(); // Wajib
            $collection = json_decode($collection, true); // Wajib
            $key = $collection; // Wajib
            $key = array_keys($key); // Wajib
            // masukkan semua kolom yang ada di database
            // tentukan juga apakah defaultnya ditampilkan apa nggak
            $key = [
                // [
                //     "key" => $key[0],
                //     "value" => "id",
                //     "show" => true
                // ],
                [
                    "key" => $key[1],
                    "value" => "Tahun Ajaran",
                    "show" => true
                ]
            ]; // Wajib
            $key = json_encode($key); // Wajib
            // masukkan apa aja yang bisa di cari di table
            $param = "id, tahun"; // Wajib

            $ev = "pilihIdTahun"; // Wajib
            return view('livewire.pages.tahun.daftar-tahun-ajaran', compact('key', 'model', 'param', 'ev'));
        }
    }
    public function pilihIdTahun($id) // Wajib
    {
        $this->idnya = $id;
    }
    public function showFormTahun($idnya)
    {
        $item = TahunAjaran::find($idnya);
        $this->tahun = $item->tahun;
        $this->updateId = $idnya;
    }
    public function ubahTahun($idnya)
    {
        $item = TahunAjaran::find($idnya);
        $item->tahun = $this->tahun;
        $item->save();
        $this->updateId = 0;
        $this->reset();
        $this->emit('refreshTable');
    }

}
