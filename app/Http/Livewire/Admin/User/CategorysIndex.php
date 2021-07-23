<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;


class CategorysIndex extends Component
{
    public function render()
    {
        $categorys = Category::all();
        return view('livewire.admin.user.categorys-index');
    }
}
