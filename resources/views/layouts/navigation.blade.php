<div class=" bg-sky-700">
    <div class="flex container items-center py-5">


        <div class="flex justify-between w-full">
            <div class="flex flex-row">
                <a href="/" class=" text-sky-100 px-2 {{ request()->is('/') ? 'font-bold' : '' }}">Home</a>
                <a href="/dashboard"
                    class=" text-sky-100 px-2 {{ request()->is('dashboard') ? 'font-bold' : '' }}">Dashboard</a>
            </div>

            <div class="flex flex-row">
                @guest
                    <a href="{{ route('register') }}" class="px-2 text-sky-100">Register</a>
                    <a href="{{ route('login') }}" class="px-2 text-sky-100">Login</a>
                @else
                    <div x-data="{dropdown:false}" class="relative">
                        <button @click="dropdown = !dropdown"
                            class="items-center  text-sky-100 flex">{{ Auth::user()->name }}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        {{-- dropdown --}}
                        <div x-show="dropdown" class="absolute bg-white shadow-lg right-0 w-32 rounded overflow-hidden">

                            <div class=" flex items-center hover:bg-gray-200 py-1 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                        clip-rule="evenodd" />
                                </svg>
                                <a href="">Profile</a>
                            </div>

                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                            <div class="flex items-center hover:bg-gray-200 py-1 px-3 overflow-hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                        clip-rule="evenodd" />
                                </svg>
                                <button type="submit">Logout</button>
                            </form>
                            </div>
                        </div>

                    </div>
                @endguest
            </div>
        </div>

    </div>
</div>
