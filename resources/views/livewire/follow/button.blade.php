<div>
    @if (auth()->check() && auth()->user()->isNot($user))
        
        @if (auth()->user()->following($user))
            <x-button.error wire:click="unfollow">Unfollow</x-button.error>
        @else
            <x-button.primary wire:click="follow">Follow</x-button.primary>
        @endif
    
    @else
        <a href="/settings" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-500 focus:outline-none active:bg-indigo-700 transition duration-150 ease-in-out">Edit My Profile</a>        
    @endif
    
</div>
