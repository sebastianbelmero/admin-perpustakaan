<?php

namespace App\Http\Livewire\Pages;

use App\Models\VDenda;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarDenda extends Component
{
    // jangan lupa import
    use WithPagination; // Wajib

    protected $listeners = ['pilih']; // Wajib

    public $idnya; // Wajib
    public $ada = false; // Wajib
    public $err;
    
    public function render()
    {
            // masukkan "App\Models\{nama modelnya}"
            $model = "App\Models\VDenda"; // Wajib
            $data = VDenda::first(); // Wajib
            if (!$data) {
                return view('livewire.pages.daftar-denda');
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
                        "key" => $key[1],
                        "value" => "Nama",
                        "show" => true
                    ],
                    [
                        "key" => $key[2],
                        "value" => "Jumlah",
                        "show" => true
                    ]
                ]; // Wajib
                $key = json_encode($key); // Wajib
                // masukkan apa aja yang bisa di cari di table
                $param = "name"; // Wajib
                $ev = "pilih"; // Wajib
                return view('livewire.pages.daftar-denda', compact('key','model', 'param', 'ev'));
            }
            
    }

    public function pilih($id) // Wajib
    {
        $this->idnya = $id;
    }
}
