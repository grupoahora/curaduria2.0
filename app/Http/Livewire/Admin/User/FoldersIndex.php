<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\Folder;
use Livewire\Component;

class FoldersIndex extends Component
{
    public function render()
    {
        $folders = Folder::all();
        return view('livewire.admin.user.folders-index', compact('folders'));
    }
}
