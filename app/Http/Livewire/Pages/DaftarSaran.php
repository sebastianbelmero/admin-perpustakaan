<?php

namespace App\Http\Livewire\Pages;

use App\Models\Suggestion;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarSaran extends Component
{
    use WithPagination;

    protected $listeners = ['pilihIdSaran']; // Wajib

    public $idnya; // Wajib
    public function render()
    {
        // pilih modelnya
        $model = "App\Models\Suggestion"; // Wajib
        $data = Suggestion::paginate(1); // Wajib
        $collection = $data->toJson(); // Wajib
        $collection = json_decode($collection, true); // Wajib
        $key = $collection['data']; // Wajib
        $key = array_keys($key[0]); // Wajib
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
                "value" => "nama",
                "show" => true
            ],
            [
                "key" => $key[2],
                "value" => "email",
                "show" => true
            ],
            [
                "key" => $key[3],
                "value" => "pesan",
                "show" => true
            ]    
        ]; // Wajib
        $key = json_encode($key); // Wajib
        // masukkan apa aja yang bisa di cari di table
        $param = "id, nama, email, pesan"; // Wajib

        $ev = "pilihIdSaran"; // Wajib
        return view('livewire.pages.daftar-saran', compact('key','model', 'param', 'ev'));
    }
    public function pilihIdSaran($id) // Wajib
    {
        $this->idnya = $id;
    }
}
