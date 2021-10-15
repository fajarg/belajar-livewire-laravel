<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $name;
    public $title;
    public $infos = [];

    public function mount()
    {
        $this->infos[] = "The application is mounting...";
    }

    public function hydrate()
    {
        $this->infos[] = "The application is hydrating...";
    }

    public function updating($name, $value)
    {
        $this->infos[] = "The application is updating...";
    }

    public function updated($name, $value)
    {
        $this->infos[] = "The application is updated...";
    }

    public function updatingName()
    {
        $this->infos[] = "The application is updating name property...";
    }

    public function updatedName()
    {
        $this->infos[] = "The application is updated name property...";
    }

    public function render()
    {
        return view('livewire.product');
    }
}
