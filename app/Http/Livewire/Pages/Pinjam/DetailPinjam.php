<?php

namespace App\Http\Livewire\Pages\Pinjam;

use App\Models\Borrow;
use App\Models\VBorrow;
use Livewire\Component;

class DetailPinjam extends Component
{
    public $idnya;
    public $borrow;

    public function mount($id)
    {
        $this->idnya = $id;
        $borrow = VBorrow::find($this->idnya);
        $this->borrow['nama'] = $borrow->name;
        $this->borrow['judul'] = $borrow->judul;
        $this->borrow['pinjam'] = $borrow->tanggal_peminjaman;
        $this->borrow['kembali'] = $borrow->tanggal_pengembalian;
        $this->borrow['keterangan'] = $borrow->keterangan;
        $this->borrow['denda'] = $borrow->denda;
        $this->borrow['status'] = $borrow->status;
    }

    public function render()
    {
        return view('livewire.pages.pinjam.detail-pinjam');
    }

    public function simpan()
    {
        $borrow = Borrow::find($this->idnya);
        $borrow->tanggal_peminjaman = $this->borrow['pinjam'];
        $borrow->tanggal_pengembalian = $this->borrow['kembali'];
        $borrow->keterangan = $this->borrow['keterangan'];
        $borrow->denda = $this->borrow['denda'];
        $borrow->status = $this->borrow['status'];
        $borrow->save();
        return redirect()->route('daftar-pinjam');
    }
}
