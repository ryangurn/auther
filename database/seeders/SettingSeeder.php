<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_role = Role::where('name', '=', 'normal')->first()->id;
        Setting::firstOrCreate(['key' => 'default-role', 'value' => $default_role, 'description' => 'This setting sets the default role that will be assigned to a new user automatically.']);

        Setting::firstOrCreate(['key' => 'oauth-token-expire', 'value' => json_encode(['year' => 0, 'month' => 0, 'day' => 15, 'hour' => 0, 'minute' => 0, 'second' => 0]), 'description' => 'This setting sets the token expiration length for normal access tokens.']);
        Setting::firstOrCreate(['key' => 'oauth-refresh-token-expire', 'value' => json_encode(['year' => 0, 'month' => 0, 'day' => 30, 'hour' => 0, 'minute' => 0, 'second' => 0]), 'description' => 'This setting sets the token expiration length for refresh access tokens.']);
        Setting::firstOrCreate(['key' => 'oauth-pac-token-expire', 'value' => json_encode(['year' => 0, 'month' => 6, 'day' => 0, 'hour' => 0, 'minute' => 0, 'second' => 0]), 'description' => 'This setting sets the token expiration length for personal access clients.']);
    }
}
