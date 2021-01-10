<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SettingUpdate extends Component
{
    public $setting;
    public $value;
    public $description;

    protected $rules = [
        'value' => 'required',
        'description' => 'required|min:3|max:2048'
    ];

    public function mount()
    {
        $this->value = $this->setting->value;
        $this->description = $this->setting->description;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validated = $this->validate();

        $this->setting->value = $validated['value'];
        $this->setting->description = $validated['description'];
        $this->setting->save();

        return redirect()->to(route('setting.index'));
    }

    public function render()
    {
        return view('livewire.setting-update');
    }
}
