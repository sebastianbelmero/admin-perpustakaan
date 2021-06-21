<?php

namespace App\Http\Livewire\Pages\Pinjam;

use App\Models\Borrow;
use App\Models\VBorrow;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarPinjam extends Component
{
    // jangan lupa import
    use WithPagination; // Wajib

    protected $listeners = ['pilihIdPeminjaman']; // Wajib

    public $idnya; // Wajib
    public $ada = false; //wajib
    
    public function render()
    {
        // masukkan "App\Models\{nama modelnya}"
        $model = "App\Models\VBorrow"; // Wajib
        $data = VBorrow::first(); // Wajib
        if (!$data) {
            return view('livewire.pages.pinjam.daftar-pinjam');
        }else{
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
                    "value" => "Id User",
                    "show" => false
                ],
                [
                    "key" => $key[2],
                    "value" => "Id Buku",
                    "show" => false
                ],
                [
                    "key" => $key[3],
                    "value" => "Nama",
                    "show" => true
                ],
                [
                    "key" => $key[4],
                    "value" => "Judul",
                    "show" => true
                ],
                [
                    "key" => $key[9],
                    "value" => "Status",
                    "show" => false
                ]
            ]; // Wajib
            $key = json_encode($key); // Wajib
            // masukkan apa aja yang bisa di cari di table
            $param = "name, judul, status"; // Wajib
            $ev = "pilihIdPeminjaman"; // Wajib
            return view('livewire.pages.pinjam.daftar-pinjam', compact('key', 'model', 'param', 'ev'));
        }
    }

    public function pilihIdPeminjaman($id) // Wajib
    {
        return redirect()->route('detail-pinjam', $id);
    }
}
