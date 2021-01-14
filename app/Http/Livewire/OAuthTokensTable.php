<?php

namespace App\Http\Livewire;

use Laravel\Passport\Token;
use Livewire\Component;

class OAuthTokensTable extends Component
{
    public $tokens;

    public function mount()
    {
        $this->tokens = Token::all();
    }

    public function render()
    {
        return view('livewire.o-auth-tokens-table');
    }
}
