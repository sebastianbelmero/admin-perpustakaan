<?php

namespace App\Http\Livewire\Pages;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarUsulanBuku extends Component
{
    // masukkan pagination
    use WithPagination;

    protected $listeners = ['pilihIdUsulan']; // Wajib

    public $idnya; // Wajib
    public $ada = false; // Wajib

    public function render()
    {
        // pilih modelnya
        $model = "App\Models\Message"; // Wajib
        $data = Message::first(); // Wajib
        if (!$data) {
            return view('livewire.pages.daftar-usulan-buku');
        } else {
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
                    "value" => "Judul",
                    "show" => true
                ],
                [
                    "key" => $key[2],
                    "value" => "Penerbit",
                    "show" => true
                ],
                [
                    "key" => $key[3],
                    "value" => "Pengarang",
                    "show" => true
                ]
            ]; // Wajib
            $key = json_encode($key); // Wajib
            // masukkan apa aja yang bisa di cari di table
            $param = "id, judul, penerbit, pengarang"; // Wajib

            $ev = "pilihIdUsulan"; // Wajib
            return view('livewire.pages.daftar-usulan-buku', compact('key', 'model', 'param', 'ev'));
        }
    }

    public function pilihIdUsulan($id) // Wajib
    {
        return redirect()->route('detail-usulan', $id);
    }
}
