<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RoleUpdate extends Component
{
    public $role;
	public $name;
	public $guard;
	
	protected $rules = [
		'name' => 'required|min:3|max:255',
		'guard' => 'required|in:web,api'
	];
	
	public function mount()
	{
		$this->name = $this->role->name;
		$this->guard = $this->role->guard_name;
	}
	
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
	
	public function save()
	{
		$validated = $this->validate();
		
		$this->role->name = $validated['name'];
		$this->role->guard_name = $validated['guard'];
		$this->role->save();
		
		return redirect()->to(route('role.index'));
	}

    public function render()
    {
        return view('livewire.role-update');
    }
}
