<x-guest-layout>
    <form method="POST" action="{{ route('mascotas.store') }}">
        @csrf
        <!-- Name -->
        <div>
            <x-input-label for="nombre" :value="__('Nombre')" />
            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" />
            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
        </div>

         <!-- Peso -->
         <div class="mt-4">
            <x-input-label for="peso" :value="__('Peso')" />
            <x-text-input id="peso" class="block mt-1 w-full" type="double" name="peso" :value="old('peso')" required autocomplete="peso" />
            <x-input-error :messages="$errors->get('peso')" class="mt-2" />
        </div>

        <!-- TipoMascota -->
        <div class="mt-4">
            <x-input-label for="tipo" :value="__('Tipo')" />
            <x-text-input id="tipo" class="block mt-1 w-full" type="text" name="tipo" :value="old('tipo')" required autocomplete="tipo" />
            <x-input-error :messages="$errors->get('razas_id')" class="mt-2" />
        </div>

         <!-- Razas -->
         <div class="mt-4">
            <x-input-label for="raza" :value="__('Razas')" />
            <x-text-input id="razas_id" class="block mt-1 w-full" type="text" name="razas_id" :value="old('razas_id')" required autocomplete="razas" />
            <x-input-error :messages="$errors->get('razas_id')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Agregar Mascota') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
