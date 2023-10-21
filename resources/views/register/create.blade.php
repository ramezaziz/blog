<x-layout>
    <section class="px-6 py8 mb-6 text-left">
        <main class="max-w-lg mx-auto hover:bg-gray-800 duration-300 rounded-xl  p-6 border-blue-700 ">
            <form method="POST" action="/register">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase inline-flex hover:bg-gray-900 p-2 duration-300 rounded-xl font-bold text-xs text-gray-100 "
                           for="name"
                    >
                        Name
                    </label>
                    <input class="border bg-gray-800 border-green-300 rounded-xl bg-rounded p-2 w-full"
                           type="text"
                           name="name"
                           id="name"
                           value="{{old('name')}}"
                           required
                    >
                    @error('name')
                    <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase inline-flex hover:bg-gray-900 p-2 duration-300 rounded-xl font-bold text-xs text-gray-100 "
                           for="username"
                           >
                      Username
                    </label>
                    <input class="border bg-gray-800 border-green-300 rounded-xl bg-rounded p-2 w-full"
                    type="text"
                    name="username"
                    id="username"
                    value="{{old('username')}}"
                    required
                    >
                    @error('username')
                    <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>
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
                            class="bg-blue-700 text-white rounded-xl duration-300 font-bold py-2 px-4 hover:bg-gray-100 hover:text-gray-900">Submit</button>
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
