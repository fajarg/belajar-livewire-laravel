<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $phone;
    public $email;
    public $msg;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'phone' => 'required|digits:10',
            'email' => 'required|email',
            'msg' => 'required|min:20'
        ]);
    }

    public function submitForm()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'required|digits:10',
            'email' => 'required|email',
            'msg' => 'required|min:20'
        ]);

        dd($this->name, $this->phone, $this->email, $this->msg);
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
