<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserShowPermissions extends Component
{
    public $user;

    public function render()
    {
        return view('livewire.user-show-permissions');
    }
}
