<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Laravel\Passport\AuthCode;
use Laravel\Passport\Client;
use Laravel\Passport\RefreshToken;
use Laravel\Passport\Token;

/**
 * Class OAuthController
 * @package App\Http\Controllers
 */
class OAuthController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function dashboard (Request $request){
        return view('oauth.dashboard');
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function access_tokens (Request $request){
    	return view('oauth.access_tokens');
    }

    /**
     * @param Token $token
     * @return Application|Factory|View
     */
    public function access_tokens_show (Token $token){
        return view('oauth.access_tokens_show', compact('token'));
    }

    /**
     * @param Token $token
     * @return Application|Factory|View
     */
    public function access_tokens_revoke (Token $token){
        return view('oauth.access_tokens_revoke', compact('token'));
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function auth_codes (Request $request){
    	return view('oauth.auth_codes');
    }

    /**
     * @param AuthCode $code
     * @return Application|Factory|View
     */
    public function auth_codes_show (AuthCode $code){
        return view('oauth.auth_codes_show', compact('code'));
    }

    /**
     * @param AuthCode $code
     * @return Application|Factory|View
     */
    public function auth_codes_revoke (AuthCode $code){
        return view('oauth.auth_codes_revoke', compact('code'));
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function clients (Request $request){
    	return view('oauth.clients');
    }

    /**
     * @param Client $client
     */
    public function clients_show (Client $client){
        return view('oauth.clients_show', compact('client'));
    }

    /**
     * @param Client $client
     */
    public function clients_revoke (Client $client){
        return view('oauth.clients_revoke', compact('client'));
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function personal_access_clients (Request $request){
    	return view('oauth.personal_access_clients');
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function refresh_tokens (Request $request){
    	return view('oauth.refresh_tokens');
    }

    /**
     * @param RefreshToken $token
     * @return Application|Factory|View
     */
    public function refresh_tokens_show (RefreshToken $token){
        return view('oauth.refresh_tokens_show', compact('token'));
    }

    /**
     * @param RefreshToken $token
     * @return Application|Factory|View
     */
    public function refresh_tokens_revoke (RefreshToken $token){
        return view('oauth.refresh_tokens_revoke', compact('token'));
    }
}
