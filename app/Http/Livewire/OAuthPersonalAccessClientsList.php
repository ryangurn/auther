<?php

namespace App\Http\Livewire;

use Laravel\Passport\PersonalAccessClient;
use Livewire\Component;

class OAuthPersonalAccessClientsList extends Component
{
    public $pacs;

    public function mount()
    {
        $this->pacs = PersonalAccessClient::all();
    }

    public function render()
    {
        return view('livewire.o-auth-personal-access-clients-list');
    }
}
