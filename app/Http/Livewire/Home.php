<?php

namespace App\Http\Livewire;

use Livewire\Component;
use phpDocumentor\Reflection\Types\This;

class Home extends Component
{
    public $name;

    public function mount($name = null)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.home');
    }
}
