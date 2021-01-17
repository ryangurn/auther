<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OAuthCodeShow extends Component
{
    public $code;

    public function render()
    {
        return view('livewire.o-auth-code-show');
    }
}
