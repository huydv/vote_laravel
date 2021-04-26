<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <livewire:styles />

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans text-sm text-gray-900 bg-gray-background">
        <header class="flex flex-col items-center justify-between px-8 py-4 md:flex-row">
        <a href="#"><img src="{{ asset('img/logo.svg') }}" alt=""></a>
        <div class="flex items-center mt-2 md:mt-0">
            @if (Route::has('login'))
                <div class="px-6 py-4 sm:block">
                    @auth
                        <!-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a> -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <a href="#">
                <img src="https://www.gravatar.com/avatar/000000000000000000000?d=mp"  alt="avatar" class="w-10 h-10 rounded-full">
            </a>
        </div>
        </header>

        <main class="container flex flex-col mx-auto max-w-custom md:flex-row">
            <div class="mx-auto w-70 md:mx-1 md:mr-5">
                <div class="mt-16 bg-white border-2 md:sticky md:top-8 border-blue rounded-xl">
                    <div class="px-6 py-2 pt-6 text-center">
                        <h3 class="text-base font-semibold">Add and idea</h3>
                        @auth
                            <p class="mt-4 text-xs">Let us know what you would like and we'll take a look over!</p>
                        @else
                            Please login to create an idea
                        @endauth

                    </div>

                    @auth
                        <livewire:create-idea />
                    @else
                        <div class="my-6 text-center">
                            <a href="{{ route('login') }}"
                                class="inline-block w-1/2 px-6 py-3 text-xs font-semibold text-white transition duration-150 border bg-blue h-11 rounded-xl border-blue hover:bg-blue-hover">
                                <span class="ml-1">Login</span>
                            </a>

                            <a href="{{ route('register') }}"
                                class="inline-block w-1/2 px-6 py-3 mt-4 text-xs font-semibold text-white transition duration-150 border bg-blue h-11 rounded-xl border-blue hover:bg-blue-hover">
                                <span class="ml-1">Sign Up</span>
                            </a>
                        </div>
                    @endauth

                </div>
            </div>

            <div class="w-175">
                <nav class="items-center justify-between hidden text-xs md:flex">
                    <ul class="flex pb-3 space-x-10 font-semibold uppercase border-b-4">
                        <li><a href="" class="pb-3 border-b-4 border-blue">All Ideas(87)</a></li>
                        <li><a href="" class="pb-3 text-gray-400 transition duration-150 ease-in border-b-4 hover:border-blue">Considering(6)</a></li>
                        <li><a href="" class="pb-3 text-gray-400 transition duration-150 ease-in border-b-4 hover:border-blue">Inprogress(1)</a></li>
                        <li><a href="" class="pb-3 text-gray-400 transition duration-150 ease-in border-b-4 hover:border-blue">Implemented(6)</a></li>
                        <li><a href="" class="pb-3 text-gray-400 transition duration-150 ease-in border-b-4 hover:border-blue">Closed(6)</a></li>
                    </ul>
                </nav>

                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>

        </main>

        <livewire:scripts />
    </body>
</html>
