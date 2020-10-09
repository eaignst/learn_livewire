<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function increment() {
        $this->count += 1;
    }

    public function decrement() {
        $this->count -= 1;
    }

    public function incrementWith($value) {
        $this->count += $value;
    }

    public function decrementWith($value) {
        $this->count -= $value;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
