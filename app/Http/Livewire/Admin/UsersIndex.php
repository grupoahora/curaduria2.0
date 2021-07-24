<?php

namespace App\Http\Livewire\Admin;
use App\Models\User;
use Livewire\Component;

use Livewire\WithPagination;

class UsersIndex extends Component
{
    public function render()
    {
        $users = User::all();


        
        return view('livewire.admin.users-index', compact('users'));
    }
}
