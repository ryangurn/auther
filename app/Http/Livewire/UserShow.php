<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserShow extends Component
{
    public $user;

    public function render()
    {
        return view('livewire.user-show');
    }
}
