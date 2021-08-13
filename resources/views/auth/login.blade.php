<x-app-layout title="Login">

    <div class="container w-full lg:w-5/12">
        <div class="p-8 bg-white shadow">
            <div class="font-medium text-xl mb-4">Login</div>

            <form action="{{ route('login') }}" method="post">
                @csrf



                <div class="mb-4">
                    <label for="email" class=" text-sm mb-2 block font-medium">Email</label>
                    <input type="text" id="email" name="email" class="px-4 py-2 rounded  w-full border focus:ring-2 focus:outline-none ">
                    <span>
                        @error('email')
                        {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mb-4">
                    <label for="password" class="text-sm mb-2 block font-medium">Password</label>
                    <input type="password" id="password" name="password" class="px-4 py-2 rounded  w-full border focus:ring-2 focus:outline-none ">
                    <span>
                        @error('password')
                        {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mb-4 items-center flex">
                    <input type="checkbox" name="remember" id="remember" class="focus:outline-none mr-2">
                    <label for="remember" class="select-none text-sm">Remember me</label>
                </div>

                <button type="submit" class="px-4 py-2 rounded bg-sky-500 hover:bg-sky-600 text-white transition-colors duration-150 hover:ring-2">
                    Register
                </button>
            </form>
        </div>
    </div>

</x-app-layout>
