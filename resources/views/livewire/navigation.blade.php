{{-- x-data es una variable de alpine para manejar el menu--}}
<header class="bg-gray-700 sticky top-0 z-50" x-data="{ open: false }">
    {{--<div class="container flex items-center h-16">--}}
    <div class="container flex items-center h-16">
        <a :class="{'bg-opacity-100 text-blue-700' : open}"
            x-on:click="open = !open" {{--cambio la variable open cuando hago click en el menu--}}
            class="flex flex-col items-center justify-center px-4 mb-0 ml-8 bg-white bg-opacity-25 text-white cursor-pointer font-semibold h-full">
            {{-- menu desplegable --}}
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span>Menu</span>
        </a>

        {{-- logo  de jetstream ocupa 7 lugares --}}
        <a href="/" class="mx-6">
            <x-jet-application-mark class="block h-6 w-auto" />
        </a>

        {{--@livewire('search')--}}
        <div class="flex-1 relative"></div>
            {{--campana de notificaciones--}}
            <div class="mx-6 relative">
                @livewire('dropdown-bell')
            </div>

            {{--logo de mensajes--}}
            <div class="mx-6 relative">
                @livewire('dropdown-message')
            </div>

            {{-- menu de usuario --}}
            <div class="mx-3 relative">
                @auth
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                        alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                @else
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <i class="fas fa-user-circle text-white text-3xl cursor-pointer"></i>
                        </x-slot>

                        <x-slot name="content">
                            <x-jet-dropdown-link href="{{ route('login') }}">
                                {{ __('Login') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="{{ route('register') }}">
                                {{ __('Register') }}
                            </x-jet-dropdown-link>
                        </x-slot>
                    </x-jet-dropdown>
                @endauth
            </div>
        
    </div>

    <nav id="navigation-menu" :class="{'block':open, 'hidden': !open}" class="bg-gray-700 bg-opacity-25 absolute w-full hidden">
        <div x-on:click.away="open = false" class=" container h-full w-1/6 mx-8">
            <ul class="bg-white ">
                <li>
                    <a href="">Barrios</a>
                </li>
                <li>
                    <a href="{{ route('cities.index') }}">Ciudades</a>
                </li>
                <li>
                    <a href="{{ route('operations.index') }}">Operaciones</a>
                </li>
                <li>
                    <a href="{{ route('orientations.index') }}">Orientaciones</a>
                </li>
                <li>
                    <a href="{{ route('provinces.index') }}">Provincias</a>
                </li>
                <li>
                    <a href="">Servicios</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

