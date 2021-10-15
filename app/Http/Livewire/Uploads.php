<?php

namespace App\Http\Livewire;

use App\Models\Upload;
use Livewire\Component;
use Livewire\WithFileUploads;

class Uploads extends Component
{
    public $title;
    public $filename;

    use WithFileUploads;
    public function fileUpload()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'filename' => 'required'
        ]);

        $filename = $this->filename->store('files', 'public');
        $validateData['filename'] = $filename;
        Upload::create($validatedData);
        session()->flash('message', 'file succesfully uploaded');
        $this->emit('fileUploaded');
    }

    public function render()
    {
        return view('livewire.uploads');
    }
}
