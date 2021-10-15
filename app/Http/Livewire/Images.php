<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class Images extends Component
{
    public $images = [];

    use WithFileUploads;
    public function uploadImages()
    {
        foreach ($this->images as $key => $images) {
            $this->images[$key] = $images->store('images', 'public');
        }

        $this->images = json_encode($this->images);
        Image::create(['filename' => $this->images]);
        session()->flash('message', 'Images succesfully uploaded!');
        $this->emit('imagesUploaded');
    }

    public function render()
    {
        return view('livewire.images');
    }
}
