<?php

namespace App\Http\Livewire;

use Laravel\Passport\RefreshToken;
use Livewire\Component;

class OAuthRefreshTokensTable extends Component
{
    public $refresh_tokens;

    public function mount()
    {
        $this->refresh_tokens = RefreshToken::all();
    }

    public function render()
    {
        return view('livewire.o-auth-refresh-tokens-table');
    }
}
