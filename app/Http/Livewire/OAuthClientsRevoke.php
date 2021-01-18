<?php

namespace App\Http\Livewire;

use Laravel\Jetstream\ConfirmsPasswords;
use Livewire\Component;

class OAuthClientsRevoke extends Component
{
    use ConfirmsPasswords;

    public $client;

    public function save()
    {
        $this->ensurePasswordIsConfirmed();

        $this->client->revoked = true;
        $this->client->save();

        return redirect()->route('auth.clients');
    }

    public function render()
    {
        return view('livewire.o-auth-clients-revoke');
    }
}
