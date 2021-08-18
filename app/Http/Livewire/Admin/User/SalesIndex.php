<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\Sale;
use Livewire\Component;

class SalesIndex extends Component
{
    public function render()
    {
        $sales = Sale::all();
        return view('livewire.admin.user.sales-index', compact('sales'));
    }
}
