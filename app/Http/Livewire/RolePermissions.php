<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RolePermissions extends Component
{
    public $role;

    public function render()
    {
        $role = $this->role;
        return view('livewire.role-permissions', compact('role'));
    }
}
