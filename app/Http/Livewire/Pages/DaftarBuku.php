<?php

namespace App\Http\Livewire\Pages;

use App\Models\Book;
use App\Models\VBook;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarBuku extends Component
{
    // jangan lupa import
    use WithPagination; // Wajib

    protected $listeners = ['pilihIdBuku']; // Wajib

    public $idnya; // Wajib
    public $ada = false; // Wajib

    
    public function render()
    {
            // masukkan "App\Models\{nama modelnya}"
            $model = "App\Models\VBook"; // Wajib
            $data = VBook::first(); // Wajib
            $abc = VBook::all();
            if (!$data) {
                return view('livewire.pages.daftar-buku');
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
                        "value" => "ISBN",
                        "show" => true
                    ],
                    [
                        "key" => $key[2],
                        "value" => "Judul",
                        "show" => true
                    ],
                    [
                        "key" => $key[3],
                        "value" => "Penerbit",
                        "show" => true
                    ],
                    [
                        "key" => $key[4],
                        "value" => "Pengarang",
                        "show" => true
                    ],
                    [
                        "key" => $key[5],
                        "value" => "Tahun",
                        "show" => false
                    ],
                    [
                        "key" => $key[6],
                        "value" => "Tanggal Masuk",
                        "show" => false
                    ],
                    [
                        "key" => $key[7],
                        "value" => "Edisi",
                        "show" => false
                    ],
                    [
                        "key" => $key[8],
                        "value" => "Website",
                        "show" => false
                    ],
                    [
                        "key" => $key[9],
                        "value" => "Email",
                        "show" => false
                    ],
                    [
                        "key" => $key[10],
                        "value" => "Jumlah",
                        "show" => false
                    ],
                    [
                        "key" => $key[11],
                        "value" => "Kategori",
                        "show" => false
                    ]
                ]; // Wajib
                $key = json_encode($key); // Wajib
                // masukkan apa aja yang bisa di cari di table
                $param = "isbn, judul, penerbit, pengarang"; // Wajib
                $ev = "pilihIdBuku"; // Wajib
                return view('livewire.pages.daftar-buku', compact('key','model', 'param', 'ev', 'abc'));
            }
            
    }

    public function pilihIdBuku($id) // Wajib
    {
        $this->idnya = $id;
    }
    public function hapusBuku()
    {
        $item = Book::find($this->idnya);
        $item->delete();
        $this->reset();
        $this->emit('refreshTable');
    }
}
