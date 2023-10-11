<x-layout>
    <section class="px-6 py8 mb-6 text-left">
        <main class="max-w-lg mx-auto hover:bg-gray-800 duration-300  rounded-xl py-3 px-2 p-1 border border-blue-500 hover:border-green-300 ">
            <h1 class="text-center font-bold text-xl duration-300  rounded-xl hover:bg-gray-900">Log In</h1>
            <form method="POST" action="/login">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase inline-flex hover:bg-gray-900 p-2 duration-300 rounded-xl font-bold text-xs text-gray-100 "
                           for="email"
                    >
                        Email
                    </label>
                    <input class="border bg-gray-800 border-green-300 rounded-xl bg-rounded p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           value="{{old('email')}}"
                           required
                    >
                    @error('email')
                    <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase inline-flex hover:bg-gray-900 p-2 duration-300 rounded-xl font-bold text-xs text-gray-100 "
                           for="Password"
                    >
                        Passowrd
                    </label>
                    <input class="border bg-gray-800 border-green-300 rounded-xl bg-rounded p-2 w-full"
                           type="password"
                           name="password"
                           id="passoword"
                           required
                    >
                    @error('password')
                    <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6 text-center mt-1">
                    <button type="submit"
                            class="bg-blue-700 text-white rounded-xl duration-300 font-bold py-2 px-4 hover:bg-gray-100 hover:text-gray-900">Log In</button>
                </div>
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="text-red-500">{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
            </form>
        </main>
    </section>


</x-layout>
