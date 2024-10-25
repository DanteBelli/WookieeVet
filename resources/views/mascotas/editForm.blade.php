<x-app-layout>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark::text-gray-100">
            {{__('Editar Mascota')}}
        </h2>
    </header>
    <form method="post" action="{{route('mascotas.update',$mascota->id)}}" class="mt-6" space-y-6>
        @csrf
        @method('PATCH')
        <div>
            <x-input-label for="nombre" :value="__('Nombre')" />
            <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" :value="old('nombre', $mascota->nombre)" required autofocus autocomplete="nombre" />
        </div>
        <div>
            <x-input-label for="peso" :value="__('Peso')" />
            <x-text-input id="peso" name="peso" type="number" class="mt-1 block w-full" :value="old('peso', $mascota->peso)" required autofocus autocomplete="apellido" />
            <x-input-error class="mt-2" :messages="$errors->get('peso')" />
        </div>
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>
        </div>
    </form>
</x-app-layout>