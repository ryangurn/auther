<?php

namespace App\Http\Livewire;

use Laravel\Passport\AuthCode;
use Laravel\Passport\Bridge\AccessToken;
use Laravel\Passport\Client;
use Laravel\Passport\PersonalAccessClient;
use Laravel\Passport\RefreshToken;
use Laravel\Passport\Token;
use Livewire\Component;

class OAuthDashboardStatistics extends Component
{
    public $tokens;
    public $codes;
    public $clients;
    public $access_clients;
    public $refresh_tokens;

    public function mount()
    {
        $this->tokens = Token::all()->count();
        $this->codes = AuthCode::all()->count();
        $this->clients = Client::all()->count();
        $this->access_clients = PersonalAccessClient::all()->count();
        $this->refresh_tokens = RefreshToken::all()->count();
    }

    public function render()
    {
        return view('livewire.o-auth-dashboard-statistics');
    }
}
