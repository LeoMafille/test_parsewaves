@props(['icon' => '', 'href'])

@php
    $is_current = request()->getPathInfo() == $href;
@endphp

<a class="h-12 place-items-center flex hover:bg-red-100" href="{{ $href }}">
    <span @class([
        'h-full inline-block',
        'bg-red-500 w-4 rounded-full' => $is_current
    ])></span>

    <span @class([
        "text-center font-bold inline-block w-full ml-4 mr-8 relative",
        "bg-red-500 px-5 py-3 rounded-lg text-white" => $is_current
    ])>
        <div class="absolute">
            {!! $icon !!}
        </div>
        {{ $slot }}
    </span>
</a>