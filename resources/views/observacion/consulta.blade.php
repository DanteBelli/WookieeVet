<x-app-layout>
    <form method="POST" action="{{ route('observacione.select') }}">
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
            <x-input-error :messages="$errors->get('idmascota')" class="mt-2" />
        </div>

        <!-- Observaciones -->
        <div class="mt-4">
            <x-input-label for="observaciones" :value="__('Observaciones')" />
            <div id="observaciones-container">
                <!-- Las observaciones se cargarán aquí -->
            </div>
        </div>

    </form>

    <script>
    document.getElementById('idmascota').addEventListener('change', function() {
        const idmascota = this.value;
        const container = document.getElementById('observaciones-container');
        container.innerHTML = '';

        if (idmascota) {
            fetch(`/observaciones/${idmascota}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.length > 0) {
                        data.forEach(obs => {
                            const observationElement = document.createElement('div');
                            observationElement.textContent = obs.observacion;
                            observationElement.style.color ='white';
                            container.appendChild(observationElement);
                        });
                    } else {
                        container.textContent = 'No hay observaciones para esta mascota.';
                    }
                })
                .catch(error => console.error('Error:', error));
        }
    });
    </script>
</x-app-layout>