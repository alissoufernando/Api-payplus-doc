<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DocumentationComponent extends Component
{
    public function render()
    {
        return view('livewire.documentation-component')->layout('layouts.doc');
    }
}
