<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserUpdate extends Component
{
    public $user;
    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|min:5|max:255',
        'email' => 'required|email|unique:users,email',
    ];

    public function mount()
    {
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

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
        return view('livewire.user-update');
    }
}
