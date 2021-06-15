<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarKategori extends Component
{
    use WithPagination; // Wajib

    protected $listeners = ['pilihIdKategori']; // Wajib

    public $idnya; // Wajib

    public function render()
    {
        // masukkan "App\Models\{nama modelnya}"
        $model = "App\Models\Category"; // Wajib
        $data = Category::paginate(1); // Wajib
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
            ]
        ]; // Wajib
        $key = json_encode($key); // Wajib
        // masukkan apa aja yang bisa di cari di table
        $param = "nama"; // Wajib
        $ev = "pilihIdKategori"; // Wajib
        return view('livewire.pages.daftar-kategori', compact('key','model', 'param', 'ev'));
    }
    public function pilihIdKategori($id) // Wajib
    {
        $this->idnya = $id;
    }
    public function hapusKategori($idnya)
    {
        $item = Category::find($idnya);
        $item->delete();
        $this->reset();
        $this->emit('Berhasil');
    }
}
