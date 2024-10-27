@php
    $classes = 'p-4 bg-white/5 rounded-xl  border border-transparent group transition-colors duration-300 hover:border-blue-800'
@endphp

<div {{$attributes(['class'=> $classes])}}>
    {{$slot}}
</div>
