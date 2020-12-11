<?php

namespace App\Http\Livewire;

use Laravel\Jetstream\ConfirmsPasswords;
use Livewire\Component;

class UserDelete extends Component
{
    use ConfirmsPasswords;

    public $user;

    public function save()
    {
        $this->ensurePasswordIsConfirmed();

        // delete user
        $this->user->delete();

        session()->flash('saved', 'user was deleted');

        redirect()->route('user.index');
    }

    public function render()
    {
        return view('livewire.user-delete');
    }
}
