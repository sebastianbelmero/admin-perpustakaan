<?php

namespace App\Http\Livewire\Pages;

use App\Models\Kelas;
use App\Models\Member;
use App\Models\TahunAjaran;
use App\Models\User;
use Livewire\Component;

class TambahAnggota extends Component
{
    public $nomorInduk;
    public $nama;
    public $kelas;
    public $tglLahir;
    public $jenisKelamin;
    public $tahun;
    public function render()
    {
        $collection = Kelas::where('id_tahun_pelajaran', '=', $this->tahun)->get();
        $tahunAjaran = TahunAjaran::all();
        return view('livewire.pages.tambah-anggota', compact('collection', 'tahunAjaran'));
    }
    public function tambahAnggota()
    {
        $email = explode(' ', $this->nama);
        $email = implode('.', $email);
        $email = strtolower($email)."@student.ac.id";
        User::create([
            'name' => $this->nama,
            'email' => $email,
            'password' => password_hash($this->nomorInduk, PASSWORD_DEFAULT)
        ]);

        $getLastUser = User::orderBy('id', 'desc')->limit(1)->get();
        $idUser = $getLastUser[0]->id;

        Member::create([
            'id_user' => $idUser,
            'nomor_induk' => $this->nomorInduk,
            'kelas' => $this->kelas,
            'tgl_lahir' => $this->tglLahir,
            'jenis_kelamin' => $this->jenisKelamin,

        ]);
        $this->reset();
        return redirect()->route('daftar-anggota');
    }
}
