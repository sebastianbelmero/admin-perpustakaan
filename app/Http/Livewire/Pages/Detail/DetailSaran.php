<?php

namespace App\Http\Livewire\Pages\Detail;

use App\Models\Suggestion;
use Livewire\Component;

class DetailSaran extends Component
{
    public $saran;

    public function mount($id)
    {
        $saran = Suggestion::find($id);
        $this->saran = $saran;
        if ($saran->status === 0) {
            $saran->status = 1;
            $saran->save();
        }
    }

    public function render()
    {
        return view('livewire.pages.detail.detail-saran');
    }

    public function kembali()
    {
        return redirect()->route('daftar-saran');
    }
}
