
@extends('wall.mesure')

@section('mur')
@php 
   
    $wallFragments = $currentMeasure->wall_parts;
    $colors = [
        'red-300', 
        'orange-300',
        'yellow-300',
        'lime-300',
        'indigo-300', 
        'violet-300', 
        'blue-300', 
        'purple-300',
        'emerald-300',
        'gray-300'
    ];

     $url = 'images/wall_pictures/';
    $hatch = [
        asset("". $url ."materials1.png"),
        asset("". $url ."materials2.png"),
        asset("". $url ."materials3.png")
    ];
    
    $sumSize = 0;
    $legend = array();
@endphp
@foreach($wallFragments as $wallFragment)
        @php 
        $sumSize+= $wallFragment->width;
        @endphp
@endforeach
<div>
    <h1 class=" text-center font-bold tracking-tight text-3xl ">Mesure {{$currentMeasure->id}}  du chantier {{$currentChantier->id}} </h1>
</div>
<div class='flex  mt-5 h-1/3 w-1/2 md:full mx-auto border-2 border-black'>
    
@foreach($wallFragments as $wallFragment)
    @php

        $chosen_hatch = $hatch[$wallFragment->material->type % 3];
        $chosen_color = $colors[array_rand($colors)];
        $legend[$wallFragment->id] = $chosen_color;
        $key = array_search($chosen_color,$colors);
        unset($colors[$key]);
        //ici on va modifier la taille des carrée en fonction de leurs taille réels.
        $percent = ($wallFragment->width/$sumSize)*100;

        //{{$wallFragment->material->type}}
    @endphp
    {{--<div class="identification-wall  h-full flex border-2 border-black bg-{{$chosen_color}}" style="width: {{ $percent }}%;" materialInformation="Materiaux: {{$wallFragment->material->name}} : | Profondeur : {{$wallFragment->width}} cm | Informations : {{$wallFragment->material->comment}}|Inflammable : {{$wallFragment->material->flammable}} |Type : {{$wallFragment->material->type}}">--}}
    <div class="identification-wall  h-full flex border-2 border-black bg-{{$chosen_color}} bg-[url({{$chosen_hatch}})] bg-center bg-repeat" style="width: {{ $percent }}%;" materialInformation="Materiaux: {{$wallFragment->material->name}} : | Profondeur : {{$wallFragment->width}} cm | Informations : {{$wallFragment->material->comment}}|Inflammable : {{$wallFragment->material->flammable}} |Type : {{$wallFragment->material->type}}">
    </div>
@endforeach
</div>
<div id= "moreInfo" class='mt-5 items-center h-1/5 w-3/5 mx-auto border-2 border-black '>

</div>

<div class='flex flex-wrap gap-2 p-4 mt-5 min-h-1/5  mx-auto border-2 border-black '>
    <table>
        <thead>
            <th>Couleur</th>
            <th>Matériau</th>
            <th>Épaisseur (cm)</th>
            <th>Informations</th>
        </thead>
        @foreach($wallFragments as $wallFragment)
        <tr class="divide-x">
            <td>
                <div class="size-12 bg-[url({{$hatch[$wallFragment->material->type % 3]}})] bg-{{$legend[$wallFragment->id]}} bg-[length:100%_100%]"></div>
            </td>
            <td>
                {{ $wallFragment->material->name }}
            </td>
            <td>
                {{ round($wallFragment->width, 2) }}
            </td>
            <td>
                {{ $wallFragment->material->comment }}
            </td>
        </tr>
            {{-- <div class="flex items-center gap-2">
                <div class="size-12  bg-[url({{$hatch[$wallFragment->material->type % 3]}})] bg-{{$legend[$wallFragment->id]}} bg-[length:100%_100%] "></div>
                <p>Materiaux: {{$wallFragment->material->name}} : | Profondeur : {{$wallFragment->width}} cm | Informations : {{$wallFragment->material->comment}}</p>
            </div> --}}
        @endforeach
    </table>
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