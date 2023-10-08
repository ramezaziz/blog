

<x-layout>
@include('posts.header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6 ">
        @if($posts->count())
            <x-post-grid :posts="$posts"/>
        @else
            <p class="text-center  font-bold text-blue-500"> No posts yet .Please check later</p>

        @endif


    </main>
</x-layout>










