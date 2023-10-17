<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <x-dropdown>
        <x-slot name="trigger">
            <button class="py-2 px-6 text-gray-900  mr-2 font-bold w-32 w-full flex lg:inline-flex ">
                {{isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories'}}
                <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px"/>
            </button>
        </x-slot>
        <x-dropdown-item href="/?" :active="request()->routeIs('home')">All</x-dropdown-item>
        @foreach($categories as $category)
            <x-dropdown-item
                href="?category={{$category->slug}}&{{http_build_query(request()->except('category', 'page'))}}"
                :active="request()->is('categories/' . $category->slug)">
                {{ucwords($category->name)}}</x-dropdown-item>
        @endforeach
    </x-dropdown>
</div>
