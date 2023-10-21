    @if(session()->has('success'))
    <div
        x-data="{show: true}"
        x-init="setTimeout(()=> show = false, 3000)"
        x-show="show"
        class="fixed bg-blue-700 text-white py-4 px-4 bottom-3 right-3 text-sm rounded-xl ">
        <p>
            {{session('success')}}
        </p>
    </div>
@endif
