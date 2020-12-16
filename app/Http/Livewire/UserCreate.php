<?php

namespace App\Http\Livewire;

use App\Mail\UserCreated;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserCreate extends Component
{
    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|min:5|max:255',
        'email' => 'required|email|unique:users,email',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validated = $this->validate();
        $pwd = substr(md5(time()).md5(time()), rand(0, 16), 14);

        // create user
        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = Hash::make($pwd);
        $user->save();

        // assign default role
        $default_role = Role::where('id', '=', Setting::where('key', '=', 'default-role')->first()->value)->first()->name;
        $user->assignRole($default_role);

        Mail::to($user)
            ->send(new UserCreated($pwd));

        return redirect()->to(route('user.index'));
    }

    public function render()
    {
        return view('livewire.user-create');
    }
}
