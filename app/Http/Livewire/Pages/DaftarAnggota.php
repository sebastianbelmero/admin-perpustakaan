<?php

namespace App\Http\Livewire\Pages;

use App\Models\VMember;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarAnggota extends Component
{
    // jangan lupa import
    use WithPagination; // Wajib

    protected $listeners = ['pilihIdAnggota']; // Wajib

    public $idnya; // Wajib


    public function render()
    {
        // masukkan "App\Models\{nama modelnya}"
        $model = "App\Models\VMember"; // Wajib
        $data = VMember::paginate(1); // Wajib
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
                "value" => "Nama",
                "show" => true
            ],
            [
                "key" => $key[2],
                "value" => "Email",
                "show" => true
            ],
            [
                "key" => $key[3],
                "value" => "Nomor Induk",
                "show" => true
            ],
            [
                "key" => $key[4],
                "value" => "Kelas",
                "show" => true
            ],
            [
                "key" => $key[5],
                "value" => "TTL",
                "show" => false
            ],
            [
                "key" => $key[6],
                "value" => "JK",
                "show" => false
            ]
        ]; // Wajib
        $key = json_encode($key); // Wajib
        // masukkan apa aja yang bisa di cari di table
        $param = "name, email, nomor_induk, kelas"; // Wajib
        $ev = "pilihIdAnggota"; // Wajib
        return view('livewire.pages.daftar-anggota', compact('key','model', 'param', 'ev'));
    }

    public function pilihIdAnggota($id) // Wajib
    {
        $this->idnya = $id;
    }
}