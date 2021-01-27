<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = "Lekia";
    public $loud = false;
    public $greeting = ['Hello'];

    public function render()
    {
        return view('livewire.hello-world');
    }

    public function resetName($name = 'Peace')
    {
        $this->name = $name;
    }
}
