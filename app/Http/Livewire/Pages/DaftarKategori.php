<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarKategori extends Component
{
    use WithPagination; // Wajib

    protected $listeners = ['pilihIdKategori', 'refreshTable' => '$refresh']; // Wajib

    public $updateId=0;
    public $nama = 0;
    public $idnya; // Wajib
    public $ada = false; //wajib
    public $err;
    
    public function render()
    {
        // masukkan "App\Models\{nama modelnya}"
        $model = "App\Models\Category"; // Wajib
        $data = Category::first(); // Wajib
        if (!$data) {
            return view('livewire.pages.daftar-kategori');
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
                    "value" => "Nama",
                    "show" => true
                ]
            ]; // Wajib
            $key = json_encode($key); // Wajib
            // masukkan apa aja yang bisa di cari di table
            $param = "nama"; // Wajib
            $ev = "pilihIdKategori"; // Wajib
            return view('livewire.pages.daftar-kategori', compact('key', 'model', 'param', 'ev'));
        }
        
    }
    public function pilihIdKategori($id) // Wajib
    {
        $this->idnya = $id;
    }
    public function showFormKategori($idnya)
    {
        $item = Category::find($idnya);
        $this->nama = $item->nama;
        $this->updateId = $idnya;
    }

    public function ubahKategori($idnya)
    {
        $item = Category::find($idnya);
        $item->nama = $this->nama;
        $item->save();
        $this->updateId = 0;
        $this->reset();
        $this->emit('refreshTable');
    }
    public function hapusKategori($idnya)
    {
        try {
            $item = Category::find($idnya);
            $item->delete();
            $this->reset();
            $this->emit('refreshTable');
        } catch (\Throwable $th) {
            $this->err = true;
        }
    }
}
