<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\Transact;
use Livewire\Component;

class TransactsIndex extends Component
{
    public function render()
    {
        $transacts = Transact::all();
        return view('livewire.admin.user.transacts-index', compact('transacts'));
    }
}
