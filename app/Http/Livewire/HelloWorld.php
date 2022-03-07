<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class HelloWorld extends Component
{
    public $name = "Spongebob";
    public $loud = false;
    public $greeting = ["Hello"];

    // Runs at the initialization of the livewire component
    public function mount(Request $request, $name)
    {
        $this->name = $request->input('name', $name);
    }

    /**
     * Runs at the beginning of every subsequent request made by the component
     * e.g changing the input
     */
    public function hydrate()
    {
        $this->name = "Am Hydrated";
    }

    /**
     * Update runs after you update any public property e.g name, loud, greeting
     */
    public function updated()
    {
    }

    public function resetName($name = "Plankton")
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
