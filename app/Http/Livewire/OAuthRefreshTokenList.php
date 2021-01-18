<?php

namespace App\Http\Livewire;

use Laravel\Passport\RefreshToken;
use Livewire\Component;

class OAuthRefreshTokenList extends Component
{
    public $tokens;

    public function mount()
    {
        $this->tokens = RefreshToken::all();
    }

    public function render()
    {
        return view('livewire.o-auth-refresh-token-list');
    }
}
