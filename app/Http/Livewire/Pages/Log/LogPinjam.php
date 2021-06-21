<?php

namespace App\Http\Livewire\Pages\Log;

use App\Models\LogPinjam as ModelsLogPinjam;
use Livewire\Component;
use Livewire\WithPagination;

class LogPinjam extends Component
{
    // jangan lupa import
    use WithPagination; // Wajib

    protected $listeners = ['pilih']; // Wajib

    public $idnya; // Wajib
    public $ada = false; //wajib
    
    public function render()
    {
        // masukkan "App\Models\{nama modelnya}"
        $model = "App\Models\LogPinjam"; // Wajib
        $data = ModelsLogPinjam::first(); // Wajib
        if (!$data) {
            return view('livewire.pages.log.log-pinjam');
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
                    "value" => "Nomor Lama",
                    "show" => true
                ],
                [
                    "key" => $key[3],
                    "value" => "Nomor Baru",
                    "show" => true
                ]
            ]; // Wajib
            $key = json_encode($key); // Wajib
            // masukkan apa aja yang bisa di cari di table
            $param = "old_nomor_induk, new_nomor_induk"; // Wajib
            $ev = "pilih"; // Wajib
            return view('livewire.pages.log.log-pinjam', compact('key', 'model', 'param', 'ev'));
        }
    }

    public function pilih($id) // Wajib
    {
        $this->idnya = $id;
    }
}
