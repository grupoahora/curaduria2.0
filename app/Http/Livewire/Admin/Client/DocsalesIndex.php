<?php

namespace App\Http\Livewire\Admin\Client;

use App\Models\Docsale;
use Livewire\Component;

class DocsalesIndex extends Component
{
    public function render()
    {
        $docsales = Docsale::all();
        return view('livewire.admin.client.docsales-index', compact('docsales'));
    }
}
