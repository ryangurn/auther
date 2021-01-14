<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();

        // lifetimes
        $token_value = config('expirations.token');
        $refresh_value = config('expirations.refresh');
        $pac_value = config('expirations.pac');


        Passport::tokensExpireIn(now()->addYears($token_value['year'])->addMonths($token_value['month'])->addDays($token_value['day'])->addHours($token_value['hour'])->addMinutes($token_value['minute'])->addSeconds($token_value['second']));
        Passport::refreshTokensExpireIn(now()->addYears($refresh_value['year'])->addMonths($refresh_value['month'])->addDays($refresh_value['day'])->addHours($refresh_value['hour'])->addMinutes($refresh_value['minute'])->addSeconds($refresh_value['second']));
        Passport::personalAccessTokensExpireIn(now()->addYears($pac_value['year'])->addMonths($pac_value['month'])->addDays($pac_value['day'])->addHours($pac_value['hour'])->addMinutes($pac_value['minute'])->addSeconds($pac_value['second']));
    }
}
