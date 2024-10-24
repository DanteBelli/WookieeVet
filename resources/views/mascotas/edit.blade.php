<x-app-layout>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Editar Masctoas') }}
        </h2>
    </header>
    <form method="post" action="{{ route('mascotas.editar') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="mt-4">
            <x-input-label for="mascotas_id" :value="__('Mascotas')" />
            <select id="mascotas_id" name="mascotas_id" class="form-control mt-1 w-full" required>
                <option value="">Seleccione una Mascota</option>
            </select>
            <x-input-error :messages="$errors->get('mascotas_id')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div>
            <x-input-label for="apellido" :value="__('Apellido')" />
            <x-text-input id="apellido" name="apellido" type="text" class="mt-1 block w-full" :value="old('apellido', $user->apellido)" required autofocus autocomplete="apellido" />
            <x-input-error class="mt-2" :messages="$errors->get('apellido')" />
        </div>
        <div>
            <x-input-label for="dni" :value="__('Dni')" />
            <x-text-input id="dni" name="dni" type="number" class="mt-1 block w-full" :value="old('dni', $user->dni)" required autofocus autocomplete="dni" />
            <x-input-error class="mt-2" :messages="$errors->get('dni')" />
        </div>
        <div>
            <x-input-label for="telefono" :value="__('Telefono')" />
            <x-text-input id="telefono" name="telefono" type="number" class="mt-1 block w-full" :value="old('telefono', $user->telefono)" required autofocus autocomplete="telefono" />
            <x-input-error class="mt-2" :messages="$errors->get('telefono')" />
        </div>
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Tu usuario de mail no esta verificado.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Haga Click aqui para verificar el email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('Se a enviado un mail para verificar.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

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
</x-app-layout>
