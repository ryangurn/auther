<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
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
     * @param Request $request
     * @return Application|Factory|View
     */
    public function clients (Request $request){
    	return view('oauth.clients');
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
}
