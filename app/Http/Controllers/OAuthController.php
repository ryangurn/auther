<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OAuthController extends Controller
{
    public function dashboard (Request $request){
        return view('oauth.dashboard');
    }

    public function access_tokens (Request $request){
    	return view('oauth.access_tokens');
    }

    public function auth_codes (Request $request){
    	return view('oauth.auth_codes');
    }

    public function clients (Request $request){
    	return view('oauth.clients');
    }

    public function personal_access_clients (Request $request){
    	return view('oauth.personal_access_clients');
    }

    public function refresh_tokens (Request $request){
    	return view('oauth.refresh_tokens');
    }
}
