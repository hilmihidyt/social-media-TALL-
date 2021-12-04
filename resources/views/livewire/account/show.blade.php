<div>
    <div class="bg-gray-700 py-10 -mt-12">
        <div class="container">
            <div class="flex items-start">
                <div class="flex-shrink-0 mr-3">
                    <img src="{{ $user->gravatar() }}" class="w-24 h-24 object-center object-cover rounded-full" alt="">
                </div>
                <div>
                    <h1 class="font-semibold text-white text-xl mb-2">{{ $user->name }}</h1>
                    <div class="text-gray-400 mb-5">
                        <div>
                            {{ $user->description }}
                        </div>
                        <div>
                            Joined: {{ $user->created_at->format('d F, Y') }}
                        </div>
                    </div>
                    @livewire('follow.button', ['user' => $user])
                </div>
            </div>
        </div>
    </div>
    @livewire('follow.statistic',['user' => $user])
    <div class="mt-16"></div>
    <div class="container">
        <div class="w-full md:w-1/2">
            @foreach ($statuses as $status)
                <div class="mb-10">
                    @livewire('status.block',['status' => $status], key($status->id))
                </div>
            @endforeach
            @if ($statuses->hasMorePages())
            <div class="flex justify-center">
                <x-button.primary wire:click.prevent="loadMore">
                <span wire:loading>
                    Please wait....
                </span>
                <span wire:loading.class="hidden">
                    Load More
                </span>
                </x-button.primary>
            </div>
            @endif
        </div>
    </div>
</div>