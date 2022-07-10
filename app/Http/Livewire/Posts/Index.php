<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class Index extends Component
{
    public function render()
    {
        return view('livewire.posts.index', [
            'posts' => Post::all()
        ]);
    }
}
