<?php

namespace App\Http\Livewire\Pages\Kelas;

use App\Models\VKelas;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarKelas extends Component
{
    use WithPagination;

    protected $listeners = ['pilihIdKelas']; // Wajib

    public $idnya; // Wajib
    public $ada = false; // Wajib

    public function render()
    {

        // pilih modelnya
        $model = "App\Models\VKelas"; // Wajib
        $data = VKelas::first(); // Wajib
        if (!$data) {
            return view('livewire.pages.kelas.daftar-kelas');
        } else {
            $this->ada = true;
            $collection = $data->toJson(); // Wajib
            $collection = json_decode($collection, true); // Wajib
            $key = $collection; // Wajib
            $key = array_keys($key); // Wajib
            // masukkan semua kolom yang ada di database
            // tentukan juga apakah defaultnya ditampilkan apa nggak
            $key = [
                [
                    "key" => $key[0],
                    "value" => "id",
                    "show" => true
                ],
                [
                    "key" => $key[1],
                    "value" => "Tahun",
                    "show" => true
                ],
                [
                    "key" => $key[2],
                    "value" => "Kelas",
                    "show" => true
                ]
            ]; // Wajib
            $key = json_encode($key); // Wajib
            // masukkan apa aja yang bisa di cari di table
            $param = "tahun, nama_kelas"; // Wajib

            $ev = "pilihIdKelas"; // Wajib
            return view('livewire.pages.kelas.daftar-kelas', compact('key', 'model', 'param', 'ev'));
        }
    }
    public function pilihIdKelas($id) // Wajib
    {
        $this->idnya = $id;
    }
}
