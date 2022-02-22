<?php

namespace App\Http\Livewire;
use App\Models\User as users;

use Livewire\Component;

class User extends Component
{
    public function render()
    {
        $users = users::paginate();

        return view('livewire.user', compact('users'));
    }
}
