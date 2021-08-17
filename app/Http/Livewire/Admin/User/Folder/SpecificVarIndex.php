<?php

namespace App\Http\Livewire\Admin\User\Transact;

use App\Models\specificVar;
use Livewire\Component;

class SpecificVarIndex extends Component
{
    public function render()
    {
        $specificvars = specificVar::all();
        return view('livewire.admin.user.transact.specific-var-index', compact('specificvars'));
    }
}
