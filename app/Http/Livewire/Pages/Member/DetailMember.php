<?php

namespace App\Http\Livewire\Pages\Member;

use App\Models\VMember;
use Livewire\Component;

class DetailMember extends Component
{
    public $idnya;

    public function mount($id)
    {
        $this->idnya = $id;
    }

    public function render()
    {
        $member = VMember::find($this->idnya);
        return view('livewire.pages.member.detail-member', compact('member'));
    }
}
