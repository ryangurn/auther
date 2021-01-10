<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleList extends Component
{
    public $roles;

    public function mount()
    {
        $this->roles = Role::all();
    }

    public function render()
    {
        $roles = $this->roles;
        return view('livewire.role-list', compact('roles'));
    }
}
