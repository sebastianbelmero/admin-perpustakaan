<?php

namespace App\Http\Livewire\Pages;

use App\Models\Book;
use App\Models\Category;
use Livewire\Component;

class UbahBuku extends Component
{
    public $collection;
    public $kategori;
    public $idNya;

    public $isbn;
    public $judul;
    public $penerbit;
    public $pengarang;
    public $tahun;
    public $tglMasuk;
    public $edisi;
    public $website;
    public $email;
    public $jumlah;
    public $idKategori;

    public $class;

    
    public function mount($id)
    {
        $this->collection = Book::findOrFail($id);
        $this->kategori = Category::all();
        $this->isbn = $this->collection['isbn'];
        $this->judul = $this->collection['judul'];
        $this->penerbit = $this->collection['penerbit'];
        $this->pengarang = $this->collection['pengarang'];
        $this->tahun = $this->collection['tahun'];
        $this->tglMasuk = $this->collection['tgl_masuk'];
        $this->edisi = $this->collection['edisi'];
        $this->website = $this->collection['website'];
        $this->email = $this->collection['email'];
        $this->jumlah = $this->collection['jumlah'];
        $this->idKategori = $this->collection['id_kategori'];
        $this->class = "px-2 py-1 w-full rounded dark:bg-gray-600 dark:text-white";

    }
    public function render()
    {
        return view('livewire.pages.ubah-buku');
    }

    public function simpan()
    {
        $this->collection['isbn'] = $this->isbn ;
        $this->collection['judul'] = $this->judul;
        $this->collection['penerbit'] = $this->penerbit;
        $this->collection['pengarang'] = $this->pengarang;
        $this->collection['tahun'] = $this->tahun;
        $this->collection['tgl_masuk'] = $this->tglMasuk;
        $this->collection['edisi'] = $this->edisi;
        $this->collection['website'] = $this->website;
        $this->collection['email'] = $this->email;
        $this->collection['jumlah'] = $this->jumlah;
        $this->collection['id_kategori'] = $this->idKategori;
        $this->collection->save();
        return redirect()->route('daftar-buku');
    }
}
