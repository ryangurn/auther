<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserRoleUpdate extends Component
{
    public $user;
    public $roles;
    public $rolesData;

    protected $rules = [
        'roles' => 'required',
        'roles.*' => 'required|exists:roles,id'
    ];

    public function mount()
    {
        $this->roles = $this->user->roles->pluck('id')->toArray();
        $rolesData = [];
        $role = Role::all();
        foreach ($role as $r)
        {
            $rolesData[$r->id] = $r->name;
        }

        $this->rolesData = $rolesData;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validated = $this->validate();

        if (isset($validated['roles']))
        {
            $this->user->syncRoles([]);
            foreach ($validated['roles'] as $role)
            {
                $r = Role::where('id', '=', $role)->first();
                $this->user->assignRole($r);
            }
        }

        session()->flash('saved', 'applied roles.');
    }

    public function render()
    {
        return view('livewire.user-role-update');
    }
}
