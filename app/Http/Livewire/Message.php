<?php

namespace App\Http\Livewire;

use App\Mail\MessageSent;
use App\Models\Message as ModelsMessage;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class Message extends Component
{
    public $name_mess;
    public $email_mess;
    public $subject;
    public $message;

    protected $rules = [
        'name_mess' => ['required', 'min:3'],
        'email_mess' => ['required', 'email'],
        'subject' => ['required', 'min:3'],
        'message' => ['required', 'min:5', 'max:200']
    ];

    protected $messages = [
        'name_mess.required' => 'Debes ingresar un nombre...',
        'name_mess.min' => 'Debe tener al menos 3 caractéres...',
        'email_mess.required' => 'Debes ingresar tu email...',
        'email_mess.email' => 'El email no es válido',
        'subject.required' => 'Debes ingresar un asunto...',
        'subject.min' => 'Debes tener al menos 3 caractéres...',
        'message.required' => 'No olvides escribir un mensaje...',
        'message.min' => 'Debe contener más de 5 caractéres...',
        'message.max' => 'Debe contener menos de 200 caractéres...'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        ModelsMessage::create($this->validate());
        //email 
        Mail::to('juanchismo10@gmail.com')->send(new MessageSent($this->validate()));

        $this->reset([
            'name_mess',
            'email_mess',
            'subject',
            'message'
        ]);
        session()->flash('success', '¡Mensaje enviado!.');
    }

    public function render()
    {
        return view('livewire.message');
    }
}
