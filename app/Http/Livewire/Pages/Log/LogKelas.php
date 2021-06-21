<?php

namespace App\Http\Livewire\Pages\Log;

use App\Models\LogKelas as ModelsLogKelas;
use Livewire\Component;
use Livewire\WithPagination;

class LogKelas extends Component
{
    // jangan lupa import
    use WithPagination; // Wajib

    protected $listeners = ['pilih']; // Wajib

    public $idnya; // Wajib
    public $ada = false; //wajib
    
    public function render()
    {
        // masukkan "App\Models\{nama modelnya}"
        $model = "App\Models\LogKelas"; // Wajib
        $data = ModelsLogKelas::first(); // Wajib
        if (!$data) {
            return view('livewire.pages.log.log-kelas');
        }else{
            $this->ada = true;
            $collection = $data->toJson(); // Wajib
            $collection = json_decode($collection, true); // Wajib
            $key = $collection; // Wajib
            $key = array_keys($key); // Wajib
            // masukkan semua kolom yang ada di database
            // tentukan juga apakah defaultnya ditampilkan apa nggak
            $key = [
                [
                    "key" => $key[2],
                    "value" => "Kelas Lama",
                    "show" => true
                ],
                [
                    "key" => $key[3],
                    "value" => "Kelas Baru",
                    "show" => true
                ]
            ]; // Wajib
            $key = json_encode($key); // Wajib
            // masukkan apa aja yang bisa di cari di table
            $param = "old_nama_kelas, new_nama_kelas"; // Wajib
            $ev = "pilih"; // Wajib
            return view('livewire.pages.log.log-kelas', compact('key', 'model', 'param', 'ev'));
        }
    }

    public function pilih($id) // Wajib
    {
        $this->idnya = $id;
    }
}
