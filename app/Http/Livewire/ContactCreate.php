<?php

namespace App\Http\Livewire;

use App\Models\Contact;

use Livewire\Component;

class ContactCreate extends Component
{
    public $name;
    public $phone;
    public $errors = [];

    protected $rules = [
        'name'  => 'required|min:6',
        'phone' => 'required|max:15',
    ];

    public function render()
    {
        return view('livewire.contact-create');
    }

    public function store()
    {
        $contact = Contact::create($this->validate());

        $this->_resetInput();

        $this->emit('contactStored', $contact);
    }

    private function _resetInput()
    {
        $this->name  = null;
        $this->phone = null;
    }
}
