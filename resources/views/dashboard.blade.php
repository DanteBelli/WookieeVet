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
                <a href="{{ route('administrador.mainAdm') }}" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded">Editar Usuarios</a>
                <a href="{{ route('mascotas.create') }}" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded">Agregar Mascota</a>
                <a href="{{ route('mascotas.edit') }}" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded">Editar Mascotas</a>
                <a href="{{ route('observacion.create')}}" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded">Agregar Observacion</a>
                <a href="{{ route('observacione.select') }}" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded">Consultar Observaciones</a>
                @break
                @case(2)
                    <a href="{{ route('mascotas.create') }}" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded">Agregar Mascota
                    <a href="{{ route('mascotas.edit') }}" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded">Editar Mascotas
                    @break
                @case(3)
                    <a href="{{ route('observacion.create')}}" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded">Agregar Observacion</a>
                    <a href="{{ route('observacione.select') }}" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded">Consultar Observaciones</a>
                    @break
                @default
            @endswitch
    @else
            <p class="text-white">No estás logueado.</p>
    @endif
</x-app-layout>
