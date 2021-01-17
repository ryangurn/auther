<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ScopesTableCell extends Component
{
    public $items;

    public function render()
    {
        return view('livewire.scopes-table-cell');
    }
}
