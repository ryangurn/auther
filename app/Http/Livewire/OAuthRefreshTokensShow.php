<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OAuthRefreshTokensShow extends Component
{
    public $token;

    public function render()
    {
        return view('livewire.o-auth-refresh-tokens-show');
    }
}
