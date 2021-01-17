<?php

namespace App\Http\Livewire;

use Laravel\Passport\AuthCode;
use Livewire\Component;

class OAuthAuthCodesList extends Component
{
    public $codes;

    public function mount()
    {
        $this->codes = AuthCode::all();
    }

    public function render()
    {
        return view('livewire.o-auth-auth-codes-list');
    }
}
