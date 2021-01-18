<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OAuthClientsShow extends Component
{
    public $client;

    public function render()
    {
        return view('livewire.o-auth-clients-show');
    }
}
