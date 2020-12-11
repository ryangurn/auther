<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserCreate extends Component
{
    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|min:5|max:255',
        'email' => 'required|email|unique:users,email',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validated = $this->validate();

        dd($validated);
    }

    public function render()
    {
        return view('livewire.user-create');
    }
}
