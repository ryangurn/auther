<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ClientTableCell extends Component
{
    public $link;
    public $client;

    public function render()
    {
        return view('livewire.client-table-cell');
    }
}
