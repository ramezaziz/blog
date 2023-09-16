    @props(['active' => false])

    @php
    $classes = 'transition-colors duration-500 block text-left px-3  leading-6 hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white';
    if($active) $classes .= 'bg-gray-900 text-white';
    @endphp
        <a {{ $attributes(['class'=>$classes])}}  href="/">{{$slot}} </a>
