<div>
    @foreach ($statuses as $status)
        <a href="#" class="flex mb-5" wire:poll>
            <div class="flex-shrink-0 mr-3">
                <img class="w-10 h-10 rounded-full object-center object-cover" src="{{ $status->user->gravatar() }}" alt="">
            </div>
            <div>
                <div class="font-semibold text-gray-900">
                    {{ $status->user->name }}
                </div>
                <div class="text-gray-800">{{ $status->body }}</div>
                <div class="text-sm text-gray-400">
                    {{ $status->published }}
                </div>
            </div>
        </a>
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
