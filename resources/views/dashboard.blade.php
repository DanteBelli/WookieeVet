<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>
    @if (Auth::check())
            @php
                $rolId = Auth::user()->rols_id;
            @endphp
            @switch($rolId)
                @case(1)
                    <p class="text-white">Administrador</p>        
                    @break
                @case(2)
                    <p class="text-white">Cliente</p>
                    @include('mascotas.create')
                    @break
                @case(3)
                    <p class="text-white">Veterinario</p>
                    @break
                @default
                    <p class="text-white">Cliente</p>
            @endswitch
    @else
            <p class="text-white">No estás logueado.</p>
    @endif
</x-app-layout>
