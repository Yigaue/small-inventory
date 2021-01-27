<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class Posts extends Component
{
    public $posts, $title, $body, $postId;
    public $updateMode = false;

    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.posts');
    }

    public function resetInputField()
    {
        $this->title = '';
        $this->body = '';
    }

    public function store()
    {
        $validate  = $this->validate([
            'title' => 'required: string',
            'body' => 'required:text'
        ]);

        Post::create($validate);
        session()->flash('message', 'Post created successfully');

        $this->resetInputField();
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->postId = $id;
        $this->title = $post->title;
        $this->body = $post->body;
        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputField();
    }

    public function update()
    {
        $validate = $this->validate(
            [
            'title' => 'required:string',
            'body' => 'required:text'
        ]);

        $post = Post::find($this->postId);

        $post->update($validate);

        $this->updateMode = false;

        session()->flash('message', 'Post updated successfully');

    }

    public function delete($id)
    {
        Post::find($id)->delete();
        session()->flash('message', 'Post deleted successful');
    }
}
