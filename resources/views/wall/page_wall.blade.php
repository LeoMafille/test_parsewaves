
@extends('wall.mesure')

@section('mur')
@php 
    $wallFragments = $currentMeasure->wall_parts;
    $nbFragments = 0;
    $colors = ['red-300', 'blue-300', 'yellow-300', 'purple-300','emerald-300'];
    $sumSize = 0;
    $legende = array();
@endphp
@foreach($wallFragments as $wallFragment)
        @php 
        $nbFragments+=1;
        $sumSize+= $wallFragment->width;
        @endphp
@endforeach
<div>
    <h1 class=" text-center font-bold tracking-tight text-3xl ">Mesure {{$currentMeasure->id}}  du chantier {{$currentChantier->id}} </h1>
</div>
<div class='flex gap-4 mt-5 h-1/3 w-1/2 md:full mx-auto border-2 border-black'>
    
@foreach($wallFragments as $wallFragment)
    @php
        $chosen_color = $colors[array_rand($colors)];
        $legende[$wallFragment->id] = $chosen_color;
        $key = array_search($chosen_color,$colors);
        unset($colors[$key]);
        //ici on va modifier la taille des carrée en fonction de leurs taille réels.
        $percent = ($wallFragment->width/$sumSize)*100;
    @endphp
    <div class="identification-wall  h-full flex border-2 border-black bg-{{$chosen_color}}" style="width: {{ $percent }}%;" materialInformation="Materiaux: {{$wallFragment->material->name}} : | Profondeur : {{$wallFragment->width}} cm | Informations : {{$wallFragment->material->comment}}|Inflammable : {{$wallFragment->material->flammable}}">
    </div>
@endforeach
</div>

<div id= "moreInfo" class='mt-5 items-center h-1/5 w-3/5 mx-auto border-2 border-black '>

</div>

<div class='flex flex-wrap gap-2 p-4 mt-5 h-1/5  mx-auto border-2 border-black '>
@foreach($wallFragments as $wallFragment)
    <div class="flex items-center gap-2">
        <div class="w-3 h-3 bg-{{$legende[$wallFragment->id]}}"></div>
        <p>Materiaux: {{$wallFragment->material->name}} : | Profondeur : {{$wallFragment->width}} cm | Informations : {{$wallFragment->material->comment}}</p>
    </div>
@endforeach
</div>

<script>
    const moreInfo = document.getElementById('moreInfo');
    document.querySelectorAll('.identification-wall').forEach(wall => {
        wall.addEventListener('mouseenter', () => {
            const information = wall.getAttribute('materialInformation');
            moreInfo.textContent = information;
        });

        wall.addEventListener('mouseleave', () => {
            moreInfo.textContent = '';
        });
    });
</script>
@endsection