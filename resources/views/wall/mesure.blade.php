@extends('wall.chantier')

@section('mesure')
<div class ="flex min-h-screen relative">
    <div class="bg-gray-50 w-40 pl-4 space-y-4">
        @php 
        //$i=0;
        $measures = $currentChantier->measures;
        $identification = $currentChantier->id;
        @endphp
        @foreach($measures as $measure)
            {{-- @php $i+=1 @endphp --}}
        <x-sidebar-link href="/chantiers/{{$identification}}/{{$measure->id}}">Mesure {{$measure->id}} </x-sidebar-link>
        @endforeach
    </div>

    <div class="grow">
        <div class="h-screen ">
            @yield('mur')   
        </div> 
    </div>
</div>






@endsection