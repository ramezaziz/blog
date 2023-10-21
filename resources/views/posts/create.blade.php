    <x-layout>

            <section class="px-6 py-8 max-w-xl mx-auto">
                <h1 class="text-lg font-bold mb-8 bg-blue-500 inline-flex rounded-xl px-2 text-gray-100">Publish New Post</h1>
                <x-panel>
                <form  method="POST" action="/admin/posts" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6 max-w-6xl mx-auto">
                        <label class="block mb-2 uppercase bg-blue-700 inline-block text-center p-2 rounded-full font-semibold text-l text-gray-100"
                               for="title"
                               >
                            Title
                        </label>
                        <input class="border bg-gray-800 border-green-300 hover:border-blue-700 duration-300 rounded-xl mt-5 p-10 w-full"
                               type="text"
                               name="title"
                               id="title"
                               value="{{old('title')}}"
                               required
                        >
                        @error('title')
                        <p class="text-red-500 font-bold text-sm mt-4">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-6 max-w-6xl mx-auto">
                        <label class="block mb-2 uppercase bg-blue-700 inline-block text-center p-2 rounded-full font-semibold text-l text-gray-100"
                               for="slug"
                        >
                            Slug
                        </label>
                        <input class="border bg-gray-800 border-green-300 hover:border-blue-700 duration-300 rounded-xl mt-5  w-full"
                               type="text"
                               name="slug"
                               id="slug"
                               value="{{old('slug')}}"
                               required
                        >
                        @error('title')
                        <p class="text-red-500 font-bold text-sm mt-4">
                            {{$message}}
                        </p>
                        @enderror
                        <div class="mb-6 max-w-6xl mx-auto">
                            <label class="block mt-6 mb-2 uppercase bg-blue-700 inline-block text-center p-2 rounded-full font-semibold text-l text-gray-100"
                                   for="thumbnail"
                            >
                                Thumbnail
                            </label>
                            <input class="border bg-gray-800 border-green-300 hover:border-blue-700 duration-300 rounded-xl mt-5 p-10 w-full"
                                   type="file"
                                   name="thumbnail"
                                   id="thumbnail"
                                   value="{{old('title')}}"
                                   required
                            >
                            @error('thumbnail')
                            <p class="text-red-500 font-bold text-sm mt-4">
                                {{$message}}
                            </p>
                            @enderror
                    </div>
                    <div class="mb-6 max-w-6xl mx-auto">
                        <label class="block mb-2 uppercase bg-blue-700 inline-block text-center p-2 rounded-full font-semibold text-l text-gray-100"
                               for="excerpt"
                        >
                            Excerpt
                        </label>
                        <textarea class="border bg-gray-800 border-green-300 hover:border-blue-700 duration-300 rounded-xl mt-5  w-full"
                               name="excerpt"
                               id="excerpt"
                               value="{{old('excerpt')}}"
                               required
                        ></textarea>
                        @error('excerpt')
                        <p class="text-red-500 font-bold text-sm mt-4">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-6 max-w-6xl mx-auto">
                        <label class="block mb-2 uppercase bg-blue-700 inline-block text-center p-2 rounded-full font-semibold text-l text-gray-100"
                               for="body"
                        >
                            Body
                        </label>
                        <textarea class="border bg-gray-800 border-green-300 hover:border-blue-700 duration-300 rounded-xl mt-5  w-full"
                                  name="body"
                                  id="body"
                                  value="{{old('body')}}"
                                  required
                        ></textarea>
                        @error('body')
                        <p class="text-red-500 font-bold text-sm mt-4">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-6 max-w-6xl mx-auto">
                        <label class="block mb-2 uppercase bg-blue-700 inline-block text-center p-2 rounded-full font-semibold text-l text-gray-100"
                               for="category"
                        >
                            Category
                        </label>
                        <select   name="category_id" id="category_id" class="transition-colors duration-500 block text-left border-b border-blue-500 px-5 py-2 leading-5 bg-blue-700 rounded-full hover:bg-gray-800 hover:text-gray-100" >
                            @php
                            $categories =\App\Models\Category::all();
                            @endphp
                            @foreach($categories as $category)
                            <option
                                value="{{$category->id}}"
                                {{old('category_id') === $category->id ?
                                        'selected' : '' }}>
                                {{$category->name}}
                            </option>
                            @endforeach
                        </select>
                        @error('category')
                        <p class="text-red-500 font-bold text-sm mt-4">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    <x-submit-button>Publish</x-submit-button>
                </form>
                </x-panel>
            </section>
    </x-layout>
