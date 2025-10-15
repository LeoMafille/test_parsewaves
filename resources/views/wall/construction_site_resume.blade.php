@extends('layouts.main')
@php
    use App\Models\Measure;
@endphp
@section('content')
{{-- Ici on a le tableau --}}
{{ $chantiers->links() }}
<div id="Table" class ="h-full  w-full ">
    {{-- La vous avez les en-tête --}}
    <div class="grid grid-cols-4 p-2 text-center bg-[#2c286d] text-white w-full">
        <div>Lieux</div>
        <div>Date</div>
        <div>Nombre de scan</div>
        <div>Liste des scans</div>

    </div>
    @foreach ( $chantiers as $chantier)
        <div class="grid grid-cols-4 p-2 border-2 border-black border-opacity-25 text-center flex justify-center items-center w-full">
            @php
            $measures = $chantier->measures; 
            @endphp
            <div class="text-justify ">{{$chantier->adresse}}</div>
            <div class="text-center ">{{$chantier->date}}</div>
            <div class="text-center ">{{sizeof($measures)}}</div>
            <div >
                <button onclick = "show_Hide(this,{{ $chantier->id }})" class="shadow-md bg-[#dedcff] px-4 py-2 rounded-xl">Voir Mesures</button>
            </div>
        </div>
        <div id="mesureSup_{{ $chantier->id }}" class ="hidden">
            <div class=" grid grid-cols-4 p-2 border-2 border-black border-opacity-25 text-center flex justify-center items-center w-full">
                <div class="text-justify">Epaisseur du mur</div>
                <div class="text-justify">Materiaux</div>
                <div class="text-justify">Representation du mur</div>
                <div class="text-justify">Schema plus précis</div>
            </div>
        
                @foreach ($measures as $mesure ) 
                    <div class="grid grid-cols-4 border-2 border-gray-300 h-24   ">
                        <div class="text-center my-auto ">
                            {{ round($mesure->wall_parts->sum("width"),2) }}
                        </div>
                        <div class="text-center my-auto ">
                            {{-- Permet de cree une liste des propriétés des wallParts la en l'occurence je prend les materials --}}
                            {{-- Pour comprendre la magouille faite  $mesure->wall_parts->pluck("material") et regarder dans un DD  --}}
                            {{-- Implode de son coté va sparse une liste en fonction de ',' --}}
                            {{-- Sans le ->ToArray() on obtient une collection qui n'est pas du bon type pour implode --}}
                            {{ implode(', ',$mesure->wall_parts->pluck("material.name")->toArray()) }}
                        </div>
                        <div class ="my-auto">
                            @if (sizeof($mesure->wall_parts)>0)
                               <x-wall-preview :mesure="$mesure"/> 
                            @else
                                <div class="flex text-center justify-center place-items-center my-auto">
                                    <p>Rien à afficher !
                                </div>
                            @endif
                        </div>
                            {{--<button onclick = "showHide(this)" class="bg-[#2c286d] text-white px-4 py-2 rounded-full">Voir Mesures</button>--}}
                            <div class="my-auto">
                                <x-sidebar-link href="/random_user/chantiers/{{ $chantier->id  }}/{{ $mesure->id }}">Details</x-sidebar-link>
                            </div>
                    </div>
                @endforeach 
        </div>
    @endforeach
</div>
<script>

    function show_Hide(button,id){ //attention les yeux ca programme fort 💪
        const tmp = document.getElementById("mesureSup_"+id);
        tmp.classList.toggle('hidden');

    }
</script>

@endsection


