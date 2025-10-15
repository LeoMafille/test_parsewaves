@extends('layouts.main')

@section('content')
    <div class="flex flex-wrap gap-10">
        <article class="flex-1 min-w-[300px] bg-white  rounded-lg shadow-md p-4">
            <span class="flex">
                <p>Nombre d'entreprises:</p> 
                <p class="text-xl ml-auto mr-2">N/A</p>
            </span>
            
        </article>

        <article class="flex-1 min-w-[300px] bg-white  rounded-lg shadow-md p-4">
            <span class="flex">
                <p>Nombre d'utilisateurs:</p> 
                <p class="text-xl ml-auto mr-2">{{ $users }}</p>
            </span>
        </article>
        
        <article class="flex-1 min-w-[300px] bg-white  rounded-lg shadow-md p-4">
            <span class="flex">
                <p>Nombre d'outils:</p> 
                <p class="text-xl ml-auto mr-2">N/A</p>
            </span>
        </article>
        
        <article class="flex-1 min-w-[300px] bg-white  rounded-lg shadow-md p-4">
            <span class="flex">
                <p>Recettes du mois:</p> 
                <p class="text-xl ml-auto mr-2">N/A</p>
            </span>
        </article>

        <article class="flex-1 min-w-[300px] bg-white  rounded-lg shadow-md p-4">
            <span class="flex">
                <p>Mesures prises dans le mois:</p> 
                <p class="text-xl ml-auto mr-2">N/A</p>
            </span>
        </article>
        
    </div>    
@endsection