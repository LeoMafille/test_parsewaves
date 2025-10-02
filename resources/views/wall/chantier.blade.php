@extends('layouts.main')

@section('content')
{{-- Cette Boucle for genere tout les chantiers present dans la base de données --}}
<div class ="flex min-h-screen relative">
    <div class=" bg-gray-50 w-40 pl-4 space-y-4">
        {{-- @php $i=0 @endphp --}}
        @foreach($chantiers as $chantier)
            {{--@php $i+=1 @endphp --}}
            <x-sidebar-link href="/chantiers/{{$chantier->id}}">Chantier {{$chantier->id}}</x-sidebar-link>
         @endforeach
    </div>

    <div class="grow">
        <div>
            @yield('mesure')   
        </div> 
    </div>
    
</div>






@endsection