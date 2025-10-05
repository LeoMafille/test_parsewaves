@extends('layouts.app')

@section('body')
    <div class="flex flex-1">
        <div class="w-64 bg-slate-50 relative">
            <div class="absolute">
                <img class="ml-6 mt-6" src="{{ asset('images/izFYhZoABtG6SWF4Y5zFUtKHck.webp') }}" alt="Parsewaves Logo">
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
        <div class="grow text-gray-500">
            <div class="h-20 bg-slate-50 flex">
                <span class="h-full flex ml-auto relative">
                    <div class="absolute top-0 w-full min-h-20 opacity-0 hover:opacity-100 p-2">
                        <div class="bg-slate-200 p-2 text-center">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="rounded-full bg-red-500 hover:bg-red-300 text-white font-bold py-2 px-4">Déconnexion</button>
                            </form>
                        </div>
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
            <div class="h-4 bg-red-400"></div>

            <div class="p-4">
                @yield('content')
            </div>
        </div>
    </div>
@endsection