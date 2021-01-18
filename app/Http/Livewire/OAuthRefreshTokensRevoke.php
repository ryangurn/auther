<?php

namespace App\Http\Livewire;

use Laravel\Jetstream\ConfirmsPasswords;
use Livewire\Component;

class OAuthRefreshTokensRevoke extends Component
{
    use ConfirmsPasswords;

    public $token;

    public function save()
    {
        $this->ensurePasswordIsConfirmed();

        $this->token->revoke();

        return redirect()->route('auth.refresh_tokens');
    }

    public function render()
    {
        return view('livewire.o-auth-refresh-tokens-revoke');
    }
}
