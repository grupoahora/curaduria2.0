<?php

namespace App\Http\Livewire\Admin\User\Folder;

use App\Models\Category;
use Livewire\Component;

class CategorysIndex extends Component
{
    public function render()
    {
        $categorys = Category::all();
        return view('livewire.admin.user.folder.categorys-index', compact('categorys'));
    }
}