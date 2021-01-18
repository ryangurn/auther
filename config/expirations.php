<?php

use App\Models\Setting;

$token = Setting::where('key', '=', 'oauth-token-expire')->first();
$token_value = json_decode($token->value, true);

$refresh = Setting::where('key', '=', 'oauth-refresh-token-expire')->first();
$refresh_value = json_decode($refresh->value, true);

$pac = Setting::where('key', '=', 'oauth-pac-token-expire')->first();
$pac_value = json_decode($pac->value, true);

return [
    'token' => $token_value,
    'refresh' => $refresh_value,
    'pac' => $pac_value
];

//this is required for install
//todo: please document this somewhere.
//return [
//    'token' => ['year' => 0, 'month' => 1, 'day' => 1, 'hour' => 1, 'minute' => 1, 'second' => 1],
//    'refresh' => ['year' => 0, 'month' => 1, 'day' => 1, 'hour' => 1, 'minute' => 1, 'second' => 1],
//    'pac' => ['year' => 0, 'month' => 1, 'day' => 1, 'hour' => 1, 'minute' => 1, 'second' => 1],
//];
