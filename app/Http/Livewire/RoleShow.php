<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RoleShow extends Component
{
    public $role;

    public function render()
    {
        return view('livewire.role-show');
    }
}
