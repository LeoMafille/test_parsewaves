@extends('layouts.main')

@section('content')

<div class ="flex min-h-screen relative">
    <div class="bg-gray-50 w-40 pl-4 space-y-4">
         <a href="/random_user/chantiers/">Retour à la liste des Chantiers </a>
        @php 
        //$i=0;
        $measures = $currentChantier->measures;
        $identification = $currentChantier->id;
        @endphp
        @foreach($measures as $measure)
            {{-- @php $i+=1 @endphp --}}
        <x-sidebar-link href="/random_user/chantiers/{{$identification}}/{{$measure->id}}">Mesure {{$measure->id}} </x-sidebar-link>
        @endforeach
    </div>

    <div class="grow">
        <div class="h-screen ">
            @yield('mur')   
        </div> 
    </div>
</div>






@endsection