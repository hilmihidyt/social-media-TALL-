<div class="bg-gray-800" x-data="{open: false}">
    <div class="flex justify-between items-center flex-col md:flex-row">
        <div class="flex justify-between px-4 py-4 bg-gray-900 md:bg-transparent md:border-b-0 w-full md:w-auto">
            <div>
                <a href="/" class="text-white font-semibold text-lg">
                {{ config('app.name') }}
                </a>
            </div>
            <div class="block md:hidden">
                <button @click="open = !open" class="text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <div :class="{'hidden': !open}" class="leading-loose py-1 md:py-0 md:flex justify-between items-center w-full">
            <div class="flex flex-col md:flex-row md:items-center py-2 md:py-0">
                <a href="#" class="block text-gray-400 hover:text-white px-4 md:py-4">Explore</a>
                <a href="#" class="block text-gray-400 hover:text-white px-4 md:py-4">Timeline</a>
            </div>
            <div class="flex flex-col md:flex-row md:items-center">
                @auth
                <div x-data="{dropdownIsOpen: false}" class="border-t border-gray-600 py-4 md:py-0">
                    <div>
                        <button @click="dropdownIsOpen = !dropdownIsOpen" class="flex items-center focus:outline-none px-4 md:px-0">
                            <div class="flex-shrink-0 mr-2">
                                <img src="{{ auth()->user()->gravatar() }}" alt="" class="w-8 h-8 rounded object-center object-cover">
                            </div>
                            <div class="block text-gray-400 hover:text-white pr-4 md:py-4">
                                {{ auth()->user()->name }}
                            </div>
                        </button>
                    </div>
                    <div :class="{'md:hidden': !dropdownIsOpen}" class="block md:absolute top-45 right-0 md:mr-4 mt-2 md:mt-15 md:bg-gray-700 md:w-56 md:rounded md:shadow md:py-2 leading-relaxed md:leading-loose">
                        <a href="{{ route('settings') }}" class="block text-gray-400 hover:text-white px-4">Settings</a>
                        <a href="" class="block text-gray-400 hover:text-white px-4">Your Profile</a>
                        <a href="" class="block text-gray-400 hover:text-white px-4">Your Friends</a>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="block text-gray-400 hover:text-white px-4"
                        >
                        Log out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                @else
                <a href="{{ route('login') }}" class="block text-gray-400 hover:text-white px-4 md:py-4">Log in</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="block text-gray-400 hover:text-white px-4 md:py-4">Register</a>
                @endif
                @endauth
            </div>
        </div>
    </div>
</div>