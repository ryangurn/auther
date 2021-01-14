<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserTableCell extends Component
{
    public $user;
    public $show_email = false;
    public $link;

    public function render()
    {
        return view('livewire.user-table-cell');
    }
}
