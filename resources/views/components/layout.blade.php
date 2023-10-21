<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body style="font-family: Open Sans, sans-serif" class="bg-gray-900 text-white">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
            </a>
        </div>

        <div class="mt-8 md:mt-0 flex items-center">
            @auth
                <span class="transition-colors duration-500 hover:text-blue-500 mt-1 lg:ml-3 rounded-full text-sm font-bold text-white uppercase py-3 px-5">Welcome  <span class="text-blue-500 duration-300 hover:text-gray-100">{{auth()->user()->name}}</span></span>

                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="bg-blue-700 duration-500 hover:bg-gray-100 hover:text-gray-900 mt-2 ml-2 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">Log out</button>
                </form>
            @else
                <a href="/register" class="transition-colors duration-500 bg-blue-500 hover:bg-gray-100  inline-flex hover:text-gray-900 mt-1 lg:ml-4 rounded-full text-sm font-bold text-white uppercase py-2 px-4">Register</a>
                <a href="/login" class="transition-colors duration-500 bg-blue-700 hover:bg-gray-100  inline-flex hover:text-gray-900 mt-1 lg:mr-1 lg:ml-4 rounded-full text-sm font-bold text-white uppercase py-2 px-4">Log In</a>
            @endauth
            <a href="#newsletter" class="bg-blue-900 duration-500 hover:bg-gray-100 hover:text-gray-900 mt-1 ml-2 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                Subscribe for Updates
            </a>


        </div>
    </nav>

   {{$slot}}

    <footer id="newsletter" class="bg-gray-900 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16 ">
        <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mt-10" style="width: 150px;">
        <h5 class="text-3xl">Stay in touch with the latest posts</h5>
        <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

        <div class="mt-10">
            <div class="relative inline-block mx-auto lg:bg-gray-800  rounded-full">

                <form method="POST" action="/newsletter" class="lg:flex text-sm">
                    @csrf
                    <div class="lg:py-3 lg:px-5 flex items-center">
                        <label for="email" class="hidden lg:inline-block">
                            <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                        </label>
                        <div>
                            <input id="email"
                                   type="text"
                                   name="email"
                                   placeholder="Your email address"
                                   class="bg-gray-800 rounded-xl bg-rounded py-2 px-2 ml-4 border border-transparent w-full">

                            @error('email')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-gray-100 hover:text-gray-900 mt-4 lg:mt-0 lg:ml-3 rounded-full text-sm font-bold text-white uppercase px-8 py-3"
                    >
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </footer>
</section>
<x-flash />
</body>
