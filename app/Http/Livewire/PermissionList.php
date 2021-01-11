<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;


class PermissionList extends Component
{
	public $permissions;
	
	public function mount()
	{
		$this->permissions = Permission::all();
	}
	
    public function render()
    {
		$permissions = $this->permissions;
        return view('livewire.permission-list', compact('permissions'));
    }
}
