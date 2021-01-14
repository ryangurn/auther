<?php

namespace App\Http\Livewire;

use Laravel\Passport\Token;
use Livewire\Component;

class OAuthAccessTokensList extends Component
{
    public $access_tokens;

    public function mount()
    {
        $this->access_tokens = Token::where('id', '!=', null)->orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.o-auth-access-tokens-list');
    }
}
