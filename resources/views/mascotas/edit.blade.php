<x-app-layout>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Seleccionar Mascota para Editar') }}
        </h2>
    </header>
    <form id="mascotaForm" method="GET" action="" class="mt-6 space-y-6">
        <div class="mt-4">
            <x-input-label for="mascotas_id" :value="__('Mascotas')" />
            <select id="mascotas_id" name="mascotas_id" class="form-control mt-1 w-full" required onchange="updateAction()">
                <option value="">Seleccione una Mascota</option>
                @foreach ($mascotas as $mascota)
                    <option value="{{ $mascota->id }}">{{ $mascota->nombre }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('mascotas_id')" class="mt-2" />
        </div>
        <x-primary-button type="submit">{{ __('Editar') }}</x-primary-button>
    </form>

    <script>
        function updateAction() {
            const selectElement = document.getElementById('mascotas_id');
            const selectedId = selectElement.value;
            const form = document.getElementById('mascotaForm');

            if (selectedId) {
                // Cambia la acción del formulario para incluir el ID
                form.action = `{{ url('mascotas') }}/${selectedId}/edit`;
            } else {
                // Restablece la acción si no se selecciona nada
                form.action = '';
            }
        }
    </script>
</x-app-layout>
