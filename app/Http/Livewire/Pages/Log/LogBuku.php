<?php

namespace App\Http\Livewire\Pages\Log;

use App\Models\LogBuku as ModelsLogBuku;
use Livewire\Component;
use Livewire\WithPagination;

class LogBuku extends Component
{
    // jangan lupa import
    use WithPagination; // Wajib

    protected $listeners = ['pilih']; // Wajib

    public $idnya; // Wajib
    public $ada = false; //wajib
    
    public function render()
    {
        // masukkan "App\Models\{nama modelnya}"
        $model = "App\Models\LogBuku"; // Wajib
        $data = ModelsLogBuku::first(); // Wajib
        if (!$data) {
            return view('livewire.pages.log.log-buku');
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
                    "key" => $key[4],
                    "value" => "Judul Terbaru",
                    "show" => true
                ],
                [
                    "key" => $key[19],
                    "value" => "Jumlah Awal",
                    "show" => true
                ],
                [
                    "key" => $key[20],
                    "value" => "JUmlah Akhir",
                    "show" => true
                ]
            ]; // Wajib
            $key = json_encode($key); // Wajib
            // masukkan apa aja yang bisa di cari di table
            $param = "new_judul"; // Wajib
            $ev = "pilih"; // Wajib
            return view('livewire.pages.log.log-buku', compact('key', 'model', 'param', 'ev'));
        }
    }

    public function pilih($id) // Wajib
    {
        return redirect()->route('detail-log-buku', $id);
    }

}
