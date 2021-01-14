<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TimestampCell extends Component
{
    public $timestamp;
    public $shorten = false;

    public function render()
    {
        return view('livewire.timestamp-cell');
    }
}
