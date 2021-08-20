<?php

namespace App\Http\Livewire\Admin\User;

<<<<<<< HEAD
use App\Models\Folder;
=======
>>>>>>> 1362026c017fd3811ae4ca4db8dbf5ce33605e85
use Livewire\Component;

class FoldersIndex extends Component
{
    public function render()
    {
<<<<<<< HEAD
        $folders = Folder::all();
        return view('livewire.admin.user.folders-index', compact('folders'));
=======
        return view('livewire.admin.user.folders-index');
>>>>>>> 1362026c017fd3811ae4ca4db8dbf5ce33605e85
    }
}
