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
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('nombre', $mascota->nombre)" required autofocus autocomplete="nombre" />
        </div>
        <div>
            <x-input-label for="peso" :value="__('Peso')" />
            <x-text-input id="peso" name="apellido" type="text" class="mt-1 block w-full" :value="old('peso', $mascota->peso)" required autofocus autocomplete="apellido" />
            <x-input-error class="mt-2" :messages="$errors->get('peso')" />
        </div>
        <div>
            <x-input-label for="tipo_id" :value="__('Tipo de Mascota')" />
            <select id="tipo_id"name="tipo_id"class="form-control mt-1 w-full"required></select>
            <x-input-error class="mt-2" :messages="$errors->get('tipo_id')" />
        </div>

        <div>
            <x-input-label for="razas_id" :value="__('Tipo de Raza')" />
            <select id="razas_id"name="razas_id"class="form-control mt-1 w-full"required></select>
            <x-input-error class="mt-2" :messages="$errors->get('razas_id')" />
        </div>
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>
        </div>
    </form>
</x-app-layout>