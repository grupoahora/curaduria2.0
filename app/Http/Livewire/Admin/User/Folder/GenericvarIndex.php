<?php

namespace App\Http\Livewire\Admin\User\Transact;

use App\Models\GenericVar;
use Livewire\Component;

class GenericvarIndex extends Component
{
    public function render()
    {
        $genericvars = GenericVar::all();
        return view('livewire.admin.user.transact.genericvar-index', compact('genericvars'));
    }
}
