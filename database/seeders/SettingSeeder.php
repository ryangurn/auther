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
    }
}
