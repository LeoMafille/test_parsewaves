@extends('layouts.app')

@section('body')
    <div class="flex flex-1">
        <div class="w-64 bg-slate-50 relative">
            <div class="absolute">
                <img class="scale-110 ml-16 mt-10" src="{{ asset('images/izFYhZoABtG6SWF4Y5zFUtKHck.webp') }}" alt="Parsewaves Logo">
            </div>
            
            <div class="mt-56 pl-4 ">
                <x-sidebar-link href="/">Accueil</x-sidebar-link>
                <x-sidebar-link href="/admin">Administration</x-sidebar-link>
                <x-sidebar-link href="/logs">Logs signaux</x-sidebar-link>
                <x-sidebar-link href="/outils">Outils</x-sidebar-link>
                <x-sidebar-link href="/users">Utilisateurs</x-sidebar-link>
                <x-sidebar-link href="/chantiers">Chantiers</x-sidebar-link>
            </div>
        </div>
        <div class="grow">
            <div class="h-28 bg-slate-50"></div>
            <div class="h-4 bg-red-400"></div>

            <div class="p-4">
                @yield('content')
            </div>
        </div>
    </div>
@endsection