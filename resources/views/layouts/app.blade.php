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

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
        <header class="flex items-center justify-between px-8 py-4">
        <a href="#"><img src="{{ asset('img/logo.svg') }}" alt=""></a>
        <div class="flex items-center">
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
                            </a
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

        <main class="container mx-auto max-w-custom flex">
            <div class="w-70 mr-5">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam totam facilis ipsum ut officia iusto modi ad rem rerum! Nobis totam accusamus, eveniet amet tempore minus commodi dignissimos facere, quasi id magni, error repellat quia illum ipsam blanditiis. Molestiae corrupti ab, dolor nostrum ipsum accusantium facilis corporis officia deserunt cupiditate id earum, aut alias. Reprehenderit libero animi voluptatum saepe fugit voluptate exercitationem ipsam sequi, architecto et commodi autem necessitatibus consequuntur, similique, aliquam corporis inventore. Ullam odio facere, blanditiis, repudiandae error rerum ab in consequatur vitae tenetur quidem. Delectus sunt repellat aspernatur consequuntur aliquid autem reiciendis, numquam excepturi placeat sit provident distinctio quaerat unde recusandae sint eius perferendis nemo! Veniam quod eius similique dolores consequatur soluta, earum exercitationem doloremque dicta dignissimos itaque, necessitatibus praesentium sapiente ex, ipsa voluptatum laudantium consectetur accusantium alias in inventore mollitia amet? Eaque exercitationem incidunt cumque maiores facere, accusamus voluptate quas voluptates aliquid excepturi vitae harum non. Ullam nesciunt enim blanditiis? Magni pariatur suscipit provident incidunt eius exercitationem aut perspiciatis dicta, a nesciunt earum adipisci eaque corporis consectetur ducimus aspernatur nisi non, sed iusto aliquam id error quasi! Assumenda ipsa laboriosam est, fugiat doloremque optio dolor debitis, cum quia ducimus consectetur inventore laborum perferendis itaque vitae sapiente.
            </div>

            <div class="w-175 ">
                <nav class="flex items-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="" class="border-b-4 pb-3 border-blue">All Ideas(87)</a></li>
                        <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering(6)</a></li>
                        <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Inprogress(1)</a></li>
                        <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented(6)</a></li>
                        <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed(6)</a></li>
                    </ul>
                </nav>

                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </body>
</html>
