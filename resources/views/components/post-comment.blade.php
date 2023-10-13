@props(['comment'])
<article class="flex bg-gray-800 py-3 border border-blue-500 hover:border-green-300 duration-300 px-4 rounded-xl">
    <div>
        <img width="150px"
             class="rounded-full border border-blue-500 p-1"
             src="https://i.pravatar.cc/60?id={{$comment->user_id}}" alt="">
    </div>
    <div class="ml-4">
        <header class="mb-3">
            <p class="mb-1 text-xs">Posted By</p>
            <h3 class="font-bold">{{$comment->author->username}}</h3>

        </header>
        <p>{{$comment->body}}</p>
    </div>

</article>
