<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body style="font-family: Open Sans, sans-serif" class="bg-gray-900 text-white">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
            </a>
        </div>

        <div class="mt-8 md:mt-0">
            <a href="/" class="transition-colors duration-500 bg-blue-900 hover:bg-gray-100 hover:text-gray-900 mt-4 lg:mt-0 lg:ml- rounded-full text-sm font-bold   text-white uppercase py-3 px-5">Home Page</a>
            <a href="#" class="bg-blue-700 duration-500 hover:bg-gray-100 hover:text-gray-900 ml-2 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                Subscribe for Updates
            </a>
            <a href="/register" class="transition-colors duration-500 bg-blue-500 hover:bg-gray-100  inline-flex hover:text-gray-900 mt-4  lg:ml-3 rounded-full text-sm font-bold text-white uppercase py-3 px-5">Register</a>


        </div>
    </nav>

   {{$slot}}

    <footer class="bg-gray-900 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16 ">
        <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mt-10" style="width: 150px;">
        <h5 class="text-3xl">Stay in touch with the latest posts</h5>
        <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

        <div class="mt-10">
            <div class="relative inline-block mx-auto lg:bg-gray-800  rounded-full">

                <form method="POST" action="#" class="lg:flex text-sm">
                    <div class="lg:py-3 lg:px-5 flex items-center">
                        <label for="email" class="hidden lg:inline-block">
                            <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                        </label>

                        <input id="email" type="text" placeholder="Your email address"
                               class="lg:bg-transparent  py-2 lg:py-0 pl-4 focus-within:outline-none">
                    </div>

                    <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-gray-100 hover:text-gray-900 mt-4 lg:mt-0 lg:ml-3 rounded-full text-sm font-bold   text-white uppercase py-3 px-8"
                    >
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </footer>
</section>
</body>
