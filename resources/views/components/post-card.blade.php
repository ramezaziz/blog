@props(['post'])
<article
     {{$attributes->merge(['class'=>'transition-colors duration-300 hover:bg-gray-800 hover:text-white border-blue-100 border-opacity-100 hover:border-opacity-100 rounded-xl'])}}>
    <div class="py-6 px-5">
        <div>
            <img src="{{asset('storage/' . $post->thumbnail)}}" alt="" class="rounded-xl w-40">
        </div>

        <div class="mt-8 flex flex-col justify-between">
            <header>
                <div class="space-x-2">
               <x-category-button :category="$post->category"/>
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/posts/{{$post->slug}}"> {{$post->title}}</a>
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{$post->created_at}}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-4">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>

                <p class="mt-4">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3">
                        <h5 class="font-bold">
                            <a href="/?author={{$post->author->username }}">{{$post->author->name}}</a>
                        </h5>
                    </div>
                </div>

                <div>
                    <a href="/posts/{{$post->slug}}"
                       class="transition-colors duration-300 text-sm font-semibold bg-blue-500 hover:bg-gray-100 hover:text-gray-900 rounded-full py-2 px-8"
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>

