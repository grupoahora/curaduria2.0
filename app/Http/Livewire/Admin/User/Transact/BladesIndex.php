<?php

namespace App\Http\Livewire\Admin\User\Transact;

use App\Models\Blade;
use Livewire\Component;

class BladesIndex extends Component
{
    public function render()
    {
        $blades = Blade::all();
        return view('livewire.admin.user.transact.blades-index', compact('blades'));
    }
}
