<?php

namespace App\Http\Livewire\Admin\Client;

use App\Models\Sale;
use Livewire\Component;

class SalesIndex extends Component
{
    public function render()
    {
        $sales = Sale::where('user_id', auth()->user()->id)->paginate();
        return view('livewire.admin.client.sales-index', compact('sales'));
    }
}
