<?php

namespace App\Http\Livewire\Pages;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class TambahBuku extends Component
{
    public $judul, $penerbit, $pengarang, $tahun, $tglMasuk, $edisi, $website, $email, $jumlah, $kategori;
    public $datas, $tampil;
    public $isbn;

    protected $queryString = ['isbn'];

    public function render()
    {
        if ($this->isbn != '') {
            $datas = Http::get("https://isbn.perpusnas.go.id/Account/GetBuku?kd1=ISBN&kd2=$this->isbn&limit=10&offset=0&search=");
            $data = $datas['rows'][0];
            $this->judul = $data['Judul'];
            $this->penerbit = $data['Penerbit'];
            $this->pengarang = $data['Pengarang'];
            $this->tahun = $data['Tahun'];
            $this->edisi = $data['Seri'];
            $this->website = $data['Website'];
            $this->email = $data['Email'];
        }
        $collection = Category::all();
        return view('livewire.pages.tambah-buku', compact('collection'));
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function tambahBuku()
    {
        $validatedData = Validator::make(
            [
                'isbn' => $this->isbn,
                'judul' => $this->judul,
                'penerbit' => $this->penerbit,
                'pengarang' => $this->pengarang,
                'tahun' => $this->tahun,
                'tgl_masuk' => $this->tglMasuk,
                'edisi' => $this->edisi,
                'website' => $this->website,
                'email' => $this->email,
                'jumlah' => $this->jumlah,
                'id_kategori' => $this->kategori
            ],
            [
                'isbn' => 'max:17',
                'judul' => 'required',
                'penerbit' => 'required',
                'pengarang' => 'required',
                'jumlah' => 'required',
                'id_kategori' => 'required'
            ],
            [
                'judul.required' => 'Judul tidak boleh kosong!',
                'penerbit.required' => 'Penerbit tidak boleh kosong!',
                'pengarang.required' => 'Pengarang tidak boleh kosong!',
                'tgl_masuk.required' => 'Tanggal masuk tidak boleh kosong!',
                'jumlah.required' => 'Jumlah tidak boleh kosong!',
                'id_kategori.required' => 'Kategori tidak boleh kosong!',
                'isbn.max' => 'ISBN maksimal terdiri atas 17 karakter'
            ],
        )->validate();
        if ($validatedData) {
            Book::create([
                'isbn' => $this->isbn,
                'judul' => $this->judul,
                'penerbit' => $this->penerbit,
                'pengarang' => $this->pengarang,
                'tahun' => $this->tahun,
                'tgl_masuk' => $this->tglMasuk,
                'edisi' => $this->edisi,
                'website' => $this->website,
                'email' => $this->email,
                'jumlah' => $this->jumlah,
                'id_kategori' => $this->kategori
            ]);
        }

        $this->reset();
        return redirect()->route('daftar-buku');
    }
}
