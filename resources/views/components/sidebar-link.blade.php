@props(['icon_class' => "", 'href'])

@php
    $is_current = request()->getPathInfo() == $href;
@endphp

<a class="h-12 place-items-center flex flex-1 hover:bg-red-100 rounded-r-xl pr-1 mr-2" href="{{ $href }}">
    <span @class([
        'h-full w-4 inline-block',
        'bg-red-400 rounded-full' => $is_current
    ])></span>

    <span @class([
        "inline-block w-full ml-2 relative px-2 py-2 flex text-gray-800",
        "bg-red-400 rounded-lg text-white" => $is_current
    ])>
        <div class="w-8">
            <i class="{{ $icon_class }}" aria-hidden="true"></i>
        </div>
        {{ $slot }}
    </span>
</a>