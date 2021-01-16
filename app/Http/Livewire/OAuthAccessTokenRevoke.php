<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Laravel\Jetstream\ConfirmsPasswords;
use Laravel\Passport\Token;
use Laravel\Passport\TokenRepository;
use Livewire\Component;

/**
 * Class OAuthAccessTokenRevoke
 * @package App\Http\Livewire
 */
class OAuthAccessTokenRevoke extends Component
{
    use ConfirmsPasswords;


    /**
     * @var Token $token
     */
    public $token;

    /**
     *
     */
    public function save()
    {
        $this->ensurePasswordIsConfirmed();
        # get token repository
        $repo = app(TokenRepository::class);
        $repo->revokeAccessToken($this->token->id);

        return redirect()->route('auth.access_tokens');
    }

    /**
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('livewire.o-auth-access-token-revoke');
    }
}
