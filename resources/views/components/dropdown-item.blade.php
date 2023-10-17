    @props(['active' => false])

    @php
    $classes = 'transition-colors duration-500 block text-left border-b border-blue-500 px-2 py-1 leading-5  rounded-xl hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white';
    if($active) $classes .= 'bg-gray-900 text-white';
    @endphp
        <a {{ $attributes(['class'=>$classes])}}  href="/">{{$slot}} </a>
