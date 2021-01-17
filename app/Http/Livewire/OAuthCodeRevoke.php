<?php

namespace App\Http\Livewire;

use Laravel\Jetstream\ConfirmsPasswords;
use Livewire\Component;

class OAuthCodeRevoke extends Component
{
    use ConfirmsPasswords;

    public $code;

    public function save()
    {
        $this->ensurePasswordIsConfirmed();
        # revoke that shit
        $this->code->revoked = true;
        $this->code->save();
        # redirect
        return redirect()->route('auth.auth_codes');
    }

    public function render()
    {
        return view('livewire.o-auth-code-revoke');
    }
}
