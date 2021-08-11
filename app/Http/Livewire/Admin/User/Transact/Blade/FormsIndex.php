<?php

namespace App\Http\Livewire\Admin\User\Transact\Blade;

use App\Models\Form;
use Livewire\Component;

class FormsIndex extends Component
{
    public function render()
    {
        $forms = Form::all();
        return view('livewire.admin.user.transact.blade.forms-index', compact('forms'));
    }
}
