   @props(['$trigger'])
    <div x-data="{ isOpen: false }">
        <div @click="isOpen = ! isOpen">
            {{$trigger}}

        </div>
        <div class="py-2  absolute w-full bg-gray-900 mt-2 rounded-xl w-full z-50" style="display:none" x-show="isOpen" >
           {{$slot}}
        </div>
