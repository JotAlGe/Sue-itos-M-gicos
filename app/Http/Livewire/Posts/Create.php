<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Livewire\WithFileUploads;
use Livewire\Component;

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $text;
    public $photo;

    protected $rules = [
        'title' => ['required', 'max:20'],
        'text' => ['required', 'min:10', 'max:200'],
        'photo' => ['required', 'mimes:jpg,png,jpeg,JPEG,JPG,PNG']
    ];

    protected $messages = [
        'title.required' => 'Ingrese un título...',
        'title.max' => 'El título puede contener hasta 10 caracteres',
        'text.required' => 'Ingrese una descripción del trabajo...',
        'text.min' => 'La descripción debe contener al menos 5 caracteres...',
        'text.max' => 'La descripción debe contener menos de 200 caracteres...',
        'photo.required' => 'Debe ingresar la foto del trabajo...',
        'photo.mimes' => 'Ingrese una imagen de tipo jpg,bmp,png,jpeg'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function store()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'text' => $this->text,
            'photo' => 'storage/' . $this->photo->store('posts', 'public'),
            'user_id' => auth()->user()->id
        ]);

        $this->res();
        return session()->flash('success', '¡Se publicó el trabajo!');
    }

    public function res()
    {
        $this->reset([
            'title', 'text', 'photo'
        ]);
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
