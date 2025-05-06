<nav x-data="{ open: false }" class="bg-[#058158] border-b border-[#058158]">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo (somente a imagem) -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('img/logoSosPatinhas.png') }}" class="h-8 w-auto" alt="Logo">
                </a>
            </div>

            <!-- Navigation Links (Desktop) -->
            <div class="hidden space-x-6 sm:flex text-[#f0f8ff] font-medium">
                <a href="#" class="hover:underline">Home</a>
                <a href="#" class="hover:underline">Sobre</a>
                <a href="#" class="hover:underline">Painel</a>
                <a href="#" class="hover:underline">Blog</a>
                <a href="#" class="hover:underline">Contato</a>
            </div>

            <!-- Settings Dropdown (Desktop) -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-[#f0f8ff] hover:text-white focus:outline-none transition">
                            @if (Auth::check())
                                <div>{{ Auth::user()->name }}</div>
                            @else
                                <div>Visitante</div>
                            @endif
                            <svg class="ml-1 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger (Mobile) -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-[#f0f8ff] hover:text-white focus:outline-none transition">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden bg-[#058158] text-[#f0f8ff] px-4 pt-2 pb-4">
        <a href="#" class="block py-2">Home</a>
        <a href="#" class="block py-2">Sobre</a>
        <a href="#" class="block py-2">Painel</a>
        <a href="#" class="block py-2">Blog</a>
        <a href="#" class="block py-2">Contato</a>

        <!-- Auth Info -->
        <div class="border-t border-[#f0f8ff] mt-4 pt-4">
            <div class="font-semibold text-base">
                @if (Auth::check())
                    {{ Auth::user()->name }}
                @else
                    Visitante
                @endif
            </div>
            @if (Auth::check())
                <div class="text-sm">{{ Auth::user()->email }}</div>
            @endif

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
