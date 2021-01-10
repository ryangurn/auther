<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SettingShow extends Component
{
    public $setting;

    public function render()
    {
        return view('livewire.setting-show');
    }
}
