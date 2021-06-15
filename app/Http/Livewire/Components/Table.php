<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    public $key;
    public $keys;
    public $model;
    public $hidden;
    public $param;
    public $ev;

    public $search;

    protected $queryString = ['search'];
    protected $listeners = ['refreshTable' => '$refresh'];

    public function mount()
    {
        $this -> keys = json_decode($this -> key, true);
        foreach ($this -> keys as $key => $value) {
            $this->hidden[$value['key']] = $value['show'];
        }
    }

    public function render()
    {
        $collection = $this->model::query()
        ->whereRaw("CONCAT($this->param) like '%$this->search%'")
        ->paginate(5);
        return view('livewire.components.table', compact('collection'));
    }

    public function pilih($id)
    {
        $this->emit($this->ev, $id);
    }
}
