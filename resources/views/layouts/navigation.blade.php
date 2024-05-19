<nav x-data="{ open: false, scrolled: false }" x-init="window.addEventListener('scroll', () => (scrolled = window.scrollY > 0))" :class="{ 'md:bg-transparent': !scrolled, 'md:bg-background border-b ': scrolled }" class="fixed z-50 w-full border-b-border bg-background transition-all">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
            <div class="flex">
                <!-- Logo -->
                <div class="flex shrink-0 items-center">
                    <a href="/">
                        <img class="h-8" src="{{ asset('/storage/SlimSlam.png') }}" alt="SlimSlam" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    @auth
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('workouts.index')" :active="request()->routeIs('workouts.index')">
                            {{ __('Workouts') }}
                        </x-nav-link>
                    @else
                        <x-nav-link :href="'#about'">
                            {{ __('About') }}
                        </x-nav-link>
                    @endauth
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:ms-6 sm:flex sm:items-center">
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center rounded-md border border-transparent bg-card px-4 py-1 text-sm font-medium leading-4 text-foreground transition duration-150 ease-in-out hover:text-muted-foreground">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="pl-3">
                                    <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('storage/placeholder.png') }}" alt="Current Profile Picture" class="h-8 w-8 rounded-full object-cover" />
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link
                                    :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                >
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <div class="flex gap-2">
                        <a class="rounded bg-primary px-5 py-2 text-sm font-medium text-background hover:bg-muted" href="{{ route('login') }}">Login</a>
                        <a class="rounded bg-card px-5 py-2 text-sm font-medium text-primary hover:bg-muted" href="{{ route('register') }}">Register</a>
                    </div>
                    {{-- Buat login logout --}}
                @endauth
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center rounded-md p-2 text-primary transition duration-150 ease-in-out hover:bg-card hover:text-muted-foreground">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="space-y-1 pb-3 pt-2">
            @auth
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('workouts.index')" :active="request()->routeIs('workouts.index')">
                    {{ __('Workouts') }}
                </x-responsive-nav-link>
            @else
                <x-responsive-nav-link :href="route('login')">
                    {{ __('Login') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')">
                    {{ __('Register') }}
                </x-responsive-nav-link>
            @endauth
        </div>

        <!-- Responsive Settings Options -->
        @auth
            <div class="border-t border-border pb-1 pt-4">
                <div class="px-4">
                    <div class="text-base font-medium text-foreground">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-muted-foreground">{{ Auth::user()->email }}</div>
                </div>
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link
                            :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();"
                        >
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @endauth
    </div>
</nav>
