<x-app-layout>
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
            <x-text-input id="peso" class="block mt-1 w-full" type="number" name="peso" step="0.01" :value="old('peso')" required autocomplete="peso" />
            <x-input-error :messages="$errors->get('peso')" class="mt-2" />
        </div>
        <!-- TipoMascota -->
        <div class="mt-4">
            <x-input-label for="tipo_id" :value="__('Tipo')" />
            <select id="tipo_id" name="tipo_id" class="form-control mt-1 w-full" required>
                <option value="">Seleccione un tipo</option>
                @foreach($tipos as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('tipo_id')" class="mt-2" />
        </div>
         <!-- Razas -->
         <div class="mt-4">
            <x-input-label for="razas_id" :value="__('Razas')" />
            <select id="razas_id" name="razas_id" class="form-control mt-1 w-full" required>
                <option value="">Seleccione una raza</option>
            </select>
            <x-input-error :messages="$errors->get('razas_id')" class="mt-2" />
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
        document.getElementById('tipo_id').addEventListener('change', function() {
            const tipoId = this.value;
            const razasSelect = document.getElementById('razas_id');
            razasSelect.innerHTML = '<option value="">Seleccione una raza</option>';

            if (tipoId) {
                fetch(`/mascotas/create/getRazaPorTipo/${tipoId}`)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(raza => {
                            const option = document.createElement('option');
                            option.value = raza.id;
                            option.textContent = raza.nombre;
                            razasSelect.appendChild(option);
                        });
                    })
                    .catch(error => console.error('Error:', error));
            }
        });
    </script>
</x-app-layout>
