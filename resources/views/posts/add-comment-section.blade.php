@auth()
    <x-panel>


        <form method="POST" action="/posts/{{$post->slug}}/comments">
            @csrf
            <header class="flex">
                <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" class="rounded-full border border-blue-500 " width="40" height="40">
                <h2 class="ml-4 mt-2">Want to participate?</h2>
            </header>
            <div>
                <textarea name="body" class="w-full dark:bg-gray-700 border-blue-500 mt-4 rounded-xl font-semibold" cols="30" rows="10" required></textarea>
                @error('body')
                <span class="text-red-500 text-sm">{{$message}}</span>
                @enderror

            </div>
            <div class=" border-t border-blue-500 mt-5 pt-4">
                <button type="submit" class="bg-blue-900 hover:bg-blue-500 border hover:border-green-300 border-blue-500 py-1 px-4 rounded-full font-semibold text-sm mt-2 duration-300 ">Post</button>
            </div>
        </form>
    </x-panel>
@else
    <p class="border border-blue-500 bg-gray-800 hover:bg-blue-500 rounded-full inline-flex duration-300 py-2 px-4 ">
        <a href="/login">Log in to leave a comment.</a>
    </p>
    <p class="border border-blue-500 bg-gray-800 hover:bg-blue-500 rounded-full ml-6 inline-flex duration-300 py-2 px-4 ">
        <a href="/register">Or Register Here.</a>
    </p>
@endauth
