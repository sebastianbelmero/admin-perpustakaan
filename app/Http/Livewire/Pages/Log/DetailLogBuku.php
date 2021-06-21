<?php

namespace App\Http\Livewire\Pages\Log;

use App\Models\LogBuku;
use Livewire\Component;

class DetailLogBuku extends Component
{
    public $buku;
    
    public function mount($id)
    {
        $this -> buku = LogBuku::find($id);
    }

    public function render()
    {
        return view('livewire.pages.log.detail-log-buku');
    }
}
