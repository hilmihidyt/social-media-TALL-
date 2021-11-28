<div class="border border-gray-300 mb-5 rounded-lg overflow-hidden">
    <div class="p-4 bg-gray-200 text-gray-700">
        Your Status
    </div>
    <div class="p-4">
        <form wire:submit.prevent="store">
            <textarea wire:model='body' placeholder="What in your mine?" rows="5" class="form-textarea w-full resize-none"></textarea>
            @error('body')
                <div class="text-red-500 text-sm mt-2">
                    {{ $message }}
                </div>
            @enderror
            <div class="flex justify-end">
                <x-button.primary>Post</x-button.primary>
            </div>
        </form>
    </div>
</div>
