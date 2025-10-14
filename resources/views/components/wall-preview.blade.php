@props(["mesure"])
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    @php 
   
        $wallFragments = $mesure->wall_parts;
        $nbFragments = sizeof($wallFragments);
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
            asset("". $url ."materials3.png")];
        
        $sumSize = 0;
        $legend = array();
    @endphp
@foreach($wallFragments as $wallFragment)
        @php 
        $sumSize+= $wallFragment->width;
        @endphp
@endforeach
<div class='flex md:full mx-auto border-2 border-black'>
    
    @foreach($wallFragments as $wallFragment)
        @php

            $chosen_hatch = $hatch[$wallFragment->material->type];
            $chosen_color = $colors[array_rand($colors)];
            $legend[$wallFragment->id] = $chosen_color;
            $key = array_search($chosen_color,$colors);
            unset($colors[$key]);
            //ici on va modifier la taille des carrée en fonction de leurs taille réels.
            $percent = ($wallFragment->width/$sumSize)*100;

            //{{$wallFragment->material->type}}
        @endphp
        {{--<div class="identification-wall  h-full flex border-2 border-black bg-{{$chosen_color}}" style="width: {{ $percent }}%;" materialInformation="Materiaux: {{$wallFragment->material->name}} : | Profondeur : {{$wallFragment->width}} cm | Informations : {{$wallFragment->material->comment}}|Inflammable : {{$wallFragment->material->flammable}} |Type : {{$wallFragment->material->type}}">--}}
        <div class="identification-wall  h-16 flex border-2 border-black bg-{{$chosen_color}} bg-[url({{$chosen_hatch}})] bg-center bg-repeat" style="width: {{ $percent }}%;">
        </div>
    @endforeach
</div>

</div>