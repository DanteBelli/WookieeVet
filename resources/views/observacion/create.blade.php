<x-app-layout>
    <form method="POST" action="{{ route('observacione.store') }}">
        @csrf

        <!-- Mascota -->
        <div class="mt-4">
            <x-input-label for="idmascota" :value="__('Mascota')" />
            <select id="idmascota" name="idmascota" class="form-control mt-1 w-full" required>
                <option value="">Seleccione una Mascota</option>
                @foreach($mascotas as $mascota)
                    <option value="{{ $mascota->id }}">{{ $mascota->nombre }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('tipo_id')" class="mt-2" />
        </div>

        <!-- Observacion -->
        <div>
            <x-input-label for="observacion" :value="__('Observacion')" />
            <x-text-input id="observacion" class="block mt-1 w-full" type="text" name="observacion" :value="old('observacion')" required autofocus autocomplete="observacion" />
            <x-input-error :messages="$errors->get('observacion')" class="mt-2" />
        </div>

        <div class="mt-4">
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4">
                    {{ __('Agregar Mascota') }}
                </x-primary-button>
            </div>
        </div>
    </form>
    <script>
    </script>
</x-app-layout>
