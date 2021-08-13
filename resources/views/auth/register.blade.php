<x-app-layout title="Register">

    <div class="container w-full lg:w-5/12">
        <div class="p-8 bg-white shadow">
            <div class="font-medium text-xl mb-4">Register</div>

            <form action="{{ route('register') }}" method="post">
                @csrf

                <div class="mb-4">
                    <label for="name" class=" text-sm mb-2 block font-medium">Nama Lengkap</label>
                    <input type="text" id="name" name="name" class="px-4 py-2 rounded  w-full border focus:ring-2 focus:outline-none ">
                    <span>
                        @error('name')
                        {{ $message }}
                        @enderror
                    </span>
                </div>

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

                <div class="mb-4">
                    <label for="password_confirmation" class="text-sm mb-2 block font-medium">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="px-4 py-2 rounded  w-full border focus:ring-2 focus:outline-none ">
                </div>

                <button type="submit" class="px-4 py-2 rounded bg-sky-500 hover:bg-sky-600 text-white transition-colors duration-150 hover:ring-2">
                    Register
                </button>
            </form>
        </div>
    </div>

</x-app-layout>
