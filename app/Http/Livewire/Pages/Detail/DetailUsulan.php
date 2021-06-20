<?php

namespace App\Http\Livewire\Pages\Detail;

use App\Models\Message;
use Livewire\Component;

class DetailUsulan extends Component
{
    public $usulan;

    public function mount($id)
    {
        $usulan = Message::find($id);
        $this->usulan = $usulan;
        if ($usulan->status === 0) {
            $usulan->status = 1;
            $usulan->save();
        }
    }

    public function render()
    {
        return view('livewire.pages.detail.detail-usulan');
    }

    public function kembali()
    {
        return redirect()->route('daftar-usulan-buku');
    }
}
