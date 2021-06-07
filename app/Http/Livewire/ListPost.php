<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ListPost extends Component
{
    public $updateStateId = 0;
    public $body = 0;
    protected $listeners = [
        'postCreated' => '$refresh'
    ];

    public function render()
    {
        $posts = Post::latest()->get();
        return view('livewire.list-post', [
            'posts' => $posts
        ]);
    }

    public function showUpdateForm($postId)
    {
        $post = Post::find($postId);
        $this->body = $post->body;
        $this->updateStateId = $postId;
    }

    public function update($postId)
    {
        $post = Post::find($postId);
        $post->body = $this->body;
        $post->save();
        $this->updateStateId = 0;
    }
}
