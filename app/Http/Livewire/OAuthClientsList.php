<?php

namespace App\Http\Livewire;

use Laravel\Passport\Client;
use Livewire\Component;

class OAuthClientsList extends Component
{
    public $clients;

    public function mount()
    {
        $this->clients = Client::all();
    }

    public function render()
    {
        return view('livewire.o-auth-clients-list');
    }
}
