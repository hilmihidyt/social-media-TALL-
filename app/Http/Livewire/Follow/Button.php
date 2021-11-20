<?php

namespace App\Http\Livewire\Follow;

use App\Models\User;
use Livewire\Component;

class Button extends Component
{
    public $user;

    public function mount($user)
    {
        $this->user = $user;
    }
    public function follow()
    {
        auth()->user()->follow($this->user);
    }

    public function unfollow()
    {
        auth()->user()->unfollow($this->user);
    }

    public function render()
    {
        return view('livewire.follow.button');
    }
}
