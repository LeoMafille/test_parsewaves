@extends('layouts.app')

@section('body')
    <div class="h-20 bg-slate-50 relative flex">
        <div class="absolute">
            <img class="ml-6 mt-6 h-8" src="{{ asset('images/izFYhZoABtG6SWF4Y5zFUtKHck.webp') }}" alt="Parsewaves Logo">
        </div>

        <span class="h-full flex ml-auto relative text-gray-500">

            <div class="absolute top-0 w-full min-h-20 opacity-0 hover:opacity-100 p-2">
                <ul class="mt-20">
                    <li class="p-2 text-center">
                        <a class="rounded-full bg-red-500 hover:bg-red-300 text-white font-bold py-2 px-4" href="/user/{{ Auth::user()->name }}">Accéder à mon profil</a>
                    </li>
                    <li class="p-2 text-center">
                        <div>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="rounded-full bg-red-500 hover:bg-red-300 text-white font-bold py-2 px-4">Déconnexion</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="flex p-2 space-x-2">
                <img src="{{ asset('images/logo_small.png') }}" class="m-1" alt="">
                
                <div class="text-center flex place-items-center">
                    <div class="block">
                        <div class="font-bold">
                            {{ Auth::user()->name }}
                        </div>
                        <div class="text-sm">
                            {{ Auth::user()->role->name }}
                        </div>
                    </div>
                </div>
                <div class="flex place-items-center">
                    <x-dropdown-icon/>
                </div>
            </div>
        </span>
    </div>

    <div class="flex flex-1">
        <div class="max-w-64 bg-slate-50 grow">
            <div class="-ml-2">
                <x-sidebar-link icon_class="fa fa-bar-chart" href="#">Dashboard</x-sidebar-link>
                <x-sidebar-title>Navigation</x-sidebar-title>
                
                @if (auth()->user()->role_id == 1)
        
                    <x-sidebar-link icon_class="fa fa-book" href="#">Entreprises</x-sidebar-link>
                    <x-sidebar-link icon_class="fa fa-cutlery" href="#">Outils</x-sidebar-link>
                    <x-sidebar-link icon_class="fa fa-credit-card-alt" href="#">Abonnement</x-sidebar-link>
                    <x-sidebar-link icon_class="fa fa-cutlery" href="#">Utilisateurs</x-sidebar-link>
        
                    <x-sidebar-title>Données d'étude</x-sidebar-title>
                    <x-sidebar-link icon_class="fa fa-book" href="#">Logs signaux</x-sidebar-link>
                    <x-sidebar-link icon_class="fa fa-cubes" href="#">Matériaux</x-sidebar-link>
                    <x-sidebar-link icon_class="fa fa-signal" href="#">Identification signal</x-sidebar-link>
        
                @elseif (auth()->user()->role_id == 2)
        
                    <x-sidebar-link icon_class="fa fa-book" href="#">Entreprises</x-sidebar-link>
                    <x-sidebar-link icon_class="fa fa-cutlery" href="#">Outils</x-sidebar-link>
                    <x-sidebar-link icon_class="fa fa-credit-card-alt" href="#">Abonnement</x-sidebar-link>
                    <x-sidebar-link icon_class="fa fa-cutlery" href="#">Utilisateurs</x-sidebar-link>
                    
                    <x-sidebar-title>Données d'étude</x-sidebar-title>
                    <x-sidebar-link icon_class="fa fa-book" href="#">Logs signaux</x-sidebar-link>
                    <x-sidebar-link icon_class="fa fa-cubes" href="#">Matériaux</x-sidebar-link>
        
                @elseif (auth()->user()->role_id == 3)
        
                    <x-sidebar-link icon_class="fa fa-cutlery" href="#">Outils</x-sidebar-link>
                    
                    <x-sidebar-title>Données d'étude</x-sidebar-title>
                    <x-sidebar-link icon_class="fa fa-book" href="#">Logs signaux</x-sidebar-link>
                    <x-sidebar-link icon_class="fa fa-cubes" href="#">Matériaux</x-sidebar-link>
        
                @endif
        
                <div class="mt-24"></div>
                <x-sidebar-title>Zone de tests</x-sidebar-title>
                <x-sidebar-link href="/chantiers">Chantiers</x-sidebar-link>
            </div>
        </div>

        <div class="flex flex-col flex-1">
            <div class="h-4 bg-red-400"></div>
            <div class="flex-1 p-4">
                @yield('content')
            </div>
        </div>
    </div>
@endsection