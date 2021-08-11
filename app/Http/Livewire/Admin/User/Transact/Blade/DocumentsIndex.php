<?php

namespace App\Http\Livewire\Admin\User\Transact\Blade;

use App\Models\Document;
use Livewire\Component;

class DocumentsIndex extends Component
{
    public function render()
    {
        $documents = Document::all();
        return view('livewire.admin.user.transact.blade.documents-index', compact('documents'));
    }
}
