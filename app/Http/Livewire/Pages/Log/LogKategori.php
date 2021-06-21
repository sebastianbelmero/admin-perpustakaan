<?php

namespace App\Http\Livewire\Pages\Log;

use App\Models\LogKategori as ModelsLogKategori;
use Livewire\Component;
use Livewire\WithPagination;

class LogKategori extends Component
{
    // jangan lupa import
    use WithPagination; // Wajib

    protected $listeners = ['pilih']; // Wajib

    public $idnya; // Wajib
    public $ada = false; //wajib
    
    public function render()
    {
        // masukkan "App\Models\{nama modelnya}"
        $model = "App\Models\LogKategori"; // Wajib
        $data = ModelsLogKategori::first(); // Wajib
        if (!$data) {
            return view('livewire.pages.log.log-kategori');
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
                    "value" => "Kategori Lama",
                    "show" => true
                ],
                [
                    "key" => $key[2],
                    "value" => "Kategori Baru",
                    "show" => true
                ]
            ]; // Wajib
            $key = json_encode($key); // Wajib
            // masukkan apa aja yang bisa di cari di table
            $param = "old_nama, new_nama"; // Wajib
            $ev = "pilih"; // Wajib
            return view('livewire.pages.log.log-kategori', compact('key', 'model', 'param', 'ev'));
        }
    }

    public function pilih($id) // Wajib
    {
        $this->idnya = $id;
    }
}
