<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class SettingList extends Component
{
    public $settings;

    public function mount()
    {
        $this->settings = Setting::all();
    }

    public function render()
    {
        return view('livewire.setting-list');
    }
}
