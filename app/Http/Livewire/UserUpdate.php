<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserUpdate extends Component
{
    public $user;
    public $name;
    public $email;
    public $phone;
    public $address;

    protected $rules = [
        'name' => 'required|min:5|max:255',
        'email' => ['required|email|unique:users,email'],
        'phone' => 'nullable|regex:/^(\+\d{1,2}\s?)?1?\-?\.?\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/|min:10',
        'address' => 'nullable',
    ];

    public function mount()
    {
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->phone = $this->user->phone;
        $this->address = $this->user->address;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validated = $this->validate();


    }

    public function render()
    {
        return view('livewire.user-update');
    }
}
