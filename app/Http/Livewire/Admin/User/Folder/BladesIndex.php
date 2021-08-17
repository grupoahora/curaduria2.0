<?php

namespace App\Http\Livewire\Admin\User\Folder;

use Illuminate\Support\Facades\Blade;
use Livewire\Component;

class BladesIndex extends Component
{
    public function render()
    {
        $blades = Blade::all();
        return view('livewire.admin.user.folder.blades-index', compact('blades'));
    }
}
