@props(['icon_class' => "", 'href'])

@php
    $is_current = request()->getPathInfo() == $href;
@endphp

<a class="h-12 place-items-center flex flex-1 hover:bg-[#dedcff] hover:shadow-md rounded-r-xl pr-1 mr-2" href="{{ $href }}">
    <span @class([
        'h-full w-4 inline-block',
        'bg-[#dedcff] rounded-full shadow-md' => $is_current
    ])></span>

    <span @class([
        "inline-block w-full ml-2 relative px-2 py-2 flex text-gray-800",
        "bg-[#dedcff] rounded-lg shadow-md" => $is_current
    ])>
        <div class="w-8">
            <i class="{{ $icon_class }}" aria-hidden="true"></i>
        </div>
        {{ $slot }}
    </span>
</a>