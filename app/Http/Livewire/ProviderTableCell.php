<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProviderTableCell extends Component
{
    public $provider;

    public function render()
    {
        return view('livewire.provider-table-cell');
    }
}
