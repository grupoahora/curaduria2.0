<?php

namespace App\Http\Livewire\Admin\User\Folder\Blade;

use App\Models\Form;
use Livewire\Component;

class FormsIndex extends Component
{
    public function render()
    {
        $forms = Form::all();
        return view('livewire.admin.user.folder.blade.forms-index', compact('forms'));
    }
}
