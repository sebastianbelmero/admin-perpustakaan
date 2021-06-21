<?php

namespace App\Http\Livewire\Pages\Log;

use App\Models\LogAjaran as ModelsLogAjaran;
use Livewire\Component;
use Livewire\WithPagination;

class LogAjaran extends Component
{
    // jangan lupa import
    use WithPagination; // Wajib

    protected $listeners = ['pilih']; // Wajib

    public $idnya; // Wajib
    public $ada = false; //wajib
    
    public function render()
    {
        // masukkan "App\Models\{nama modelnya}"
        $model = "App\Models\LogAjaran"; // Wajib
        $data = ModelsLogAjaran::first(); // Wajib
        if (!$data) {
            return view('livewire.pages.log.log-ajaran');
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
                    "value" => "Lama",
                    "show" => true
                ],
                [
                    "key" => $key[2],
                    "value" => "Baru",
                    "show" => true
                ]
            ]; // Wajib
            $key = json_encode($key); // Wajib
            // masukkan apa aja yang bisa di cari di table
            $param = "old_tahun, new_tahun"; // Wajib
            $ev = "pilih"; // Wajib
            return view('livewire.pages.log.log-ajaran', compact('key', 'model', 'param', 'ev'));
        }
    }

    public function pilih($id) // Wajib
    {
        $this->idnya = $id;
    }
}
