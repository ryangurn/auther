<?php

namespace App\Http\Livewire;

use App\Mail\UserUpdated;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Livewire\Component;

class UserUpdate extends Component
{
    public $user;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $reset_password;

    protected $rules = [
        'name' => 'required|min:5|max:255',
        'email' => ['required', 'email'],
        'phone' => 'nullable|phone:auto',
        'address' => 'nullable',
        'reset_password' => 'nullable'
    ];

    public function mount()
    {
        $this->name = $this->user->name;
        $this->email = $this->user->email;
		if ($this->user->phone != null)
        	$this->phone = phone($this->user->phone)->formatE164();
        $this->address = $this->user->address;

        $this->rules['email'][] = Rule::unique('users')->ignore($this->user->id);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validated = $this->validate();

        if (isset($validated['name']) && $validated['name'] != null)
            $this->user->name = $validated['name'];
        if (isset($validated['email']) && $validated['email'] != null)
            $this->user->email = $validated['email'];
        if (isset($validated['phone']) && $validated['phone'] != null)
            $this->user->phone = $validated['phone'];
        if (isset($validated['address']) && $validated['address'] != null)
            $this->user->address = $validated['address'];

        if (isset($validated['reset_password']) && $validated['reset_password'] == "yes")
        {
            $pass = substr(md5(time()).md5(time()), rand(0, 16), 14);
            $pwd = Hash::make($pass);
            $this->user->password = $pwd;
        }

        Mail::to($this->user)
            ->send(new UserUpdated(isset($pwd) ? $pwd : null));

        $this->user->save();

        return redirect()->to(route('user.index'));
    }

    public function render()
    {
        return view('livewire.user-update');
    }
}
