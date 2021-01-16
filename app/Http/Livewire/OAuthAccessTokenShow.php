<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OAuthAccessTokenShow extends Component
{
    public $token;

    public function render()
    {
        return view('livewire.o-auth-access-token-show');
    }
}
