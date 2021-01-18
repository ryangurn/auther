<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RevokedTableCell extends Component
{
    public $revoked;
    public $prefix = null;

    public function render()
    {
        return view('livewire.revoked-table-cell');
    }
}
