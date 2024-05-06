<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jacquard+24&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css'])
</head>

<body class="antialiased">
    {{-- Layer 2 - Hidden Window beneath - 4 --}}
    <div class="window-4"></div>
    <div class="window-3"></div>
    <div class="window-2"></div>
    <div class="window-1"></div>

    <main>
        {{-- Layer 1 - AI generated background image --}}
        <div class="bg-one main-bg min-h-screen bg-center bg-cover bg-no-repeat">
            <div class="overlay-bg">
                @if(Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                in</a>

                            @if(Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <div class="flex justify-center p-6">
                    <img class="object-cover"
                        src="{{ Vite::asset('resources/images/SPNFDWB.svg') }}"
                        alt="spoonfedweb">
                </div>
                <div class="flex flex-col space-y-16 text-yellow-300">
                    <div class="md:text-8xl text-6xl text-center pt-16 font-extrabold font-honk px-6">
                        SELECT YOUR OPPONENT
                    </div>
                    <div
                        class="ml-4 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-2 gap-y-8 board-d min-w-screen ">
                        <div class="c-1 rounded-lg">
                            <div class="h-full flex flex-col">
                                <div tabindex="0"
                                    class="transition-all duration-400 text-transparent focus:bg-gradient-to-tr hover:bg-gradient-to-tr from-slate-950 grow border-double border-sky-100 focus:scale-105 hover:scale-105 border-2 text-xs hover:text-emerald-200 focus:text-emerald-200 p-4 font-semibold rounded-md flex flex-col-reverse cursor-pointer">
                                    <div>
                                        <p>Name: Block Turret</p>
                                        <p>Experience: Legend </p>
                                        <p>AI: LangChain / GPTs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-2 rounded-lg">
                            <div class="h-full flex flex-col">
                                <div tabindex="0" class="transition-all duration-400 text-transparent focus:bg-gradient-to-tr hover:bg-gradient-to-tr from-slate-950 grow border-double border-sky-100 focus:scale-105 hover:scale-105 border-2 text-xs
                                    hover:text-emerald-200 focus:text-emerald-200 p-4 font-semibold rounded-md flex flex-col-reverse
                                    cursor-pointer">
                                    <div>
                                        <p>Name: Fujia Capicomm</p>
                                        <p>Experience: Legend </p>
                                        <p>AI: ChainLink</p>
                                        <p>Bonus: Crypto chat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-3">
                            &nbsp; 🤖
                        </div>
                        <div class="c-4">
                            &nbsp; 🤖
                        </div>
                        <div class="c-5">
                            &nbsp; 🤖
                        </div>

                        <div class="c-6">
                            &nbsp; 🤖
                        </div>
                        <div class="c-7">
                            &nbsp; 🤖
                        </div>
                        <div class="c-8">
                            &nbsp; 🤖
                        </div>
                        <div class="c-9">
                            &nbsp; 🤖
                        </div>
                        <div class="c-10">
                            &nbsp; 🤖
                        </div>

                    </div>
                    <div class="flex justify-center">
                        <h1 class="text-9xl font-jacquard">HELLO WORLD</h1>
                    </div>
                    <div>03</div>
                    <div>04</div>
                    <div>05</div>
                    <div>06</div>
                    <div>07</div>
                    <div>08</div>
                    <div>09</div>
                    <div>10</div>
                    <div>11</div>
                    <div>12</div>
                    <div>13</div>
                </div>
            </div>
        </div>
    </main>

    <footer class="
        text-center footer p-8
        bg-gradient-to-br
        from-cyan-700
        via-pink-700 via-30%
        to-slate-950
        text-yellow-100
        ">
        <p class="copyright">by
            <a class="hover:underline" href="https://twitter.com/spoonfedweb" target="_blank">@spoonfedweb</a></p>
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>
</body>

</html>
