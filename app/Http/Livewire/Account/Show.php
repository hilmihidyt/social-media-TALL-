<?php

namespace App\Http\Livewire\Account;

use App\Models\Timeline\Status;
use App\Models\User;
use Livewire\Component;

class Show extends Component
{
    public $user;

    public function mount($identifier)
    {
        $this->user = User::where('username', $identifier)->orWhere('hash', $identifier)->first();
    }

    public $perPage= 10;
    
    public function loadMore()
    {
        // sleep(1);
        $this->perPage +=10;
    }

    public function render()
    {
        $statuses = $this->user->statuses()->with('user')->latest()->paginate($this->perPage);
        return view('livewire.account.show', compact('statuses'));
    }
}
