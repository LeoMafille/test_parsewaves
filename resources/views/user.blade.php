@extends('layouts.main')

@section('content')

    <div class="flex">
        
        <div class="flex flex-col p-2 m-auto text-center place-items-center text-xl">
            <img src="{{ asset('images/logo_small.png') }}" class="m-1 w-1/2 h-1/2" alt="">
            <a href="" class="mt-5 mb-2 text-sm text-white bg-[#1d1d1b] bg-opacity-35 rounded-md p-1">Modifier mon profil</a>
            <div class="mt-12">
                <h2 class="flex font-bold bg-[#dedcff] h-8 items-center justify-center shadow-md">Nom</h2>
                <p class="mt-6"> {{ Auth::user()->name }}</p>
            </div>
            <div class="mt-12">
                <h2 class="flex font-bold bg-[#dedcff] h-8 items-center justify-center shadow-md">Poste</h2>
                <p class="mt-6">{{ Auth::user()->role->name }}</p>
            </div>
            <div class="mt-12">
                <h2 class="flex font-bold bg-[#dedcff] h-8 items-center justify-center shadow-md">Adresse e-mail</h2>
                <p class="mt-6">{{ Auth::user()->email }}</p>
            </div>
        </div>
        
    </div>
@endsection