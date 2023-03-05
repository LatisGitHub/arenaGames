<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- nick -->
        <div>
            <x-input-label for="nick" :value="__('Nick')" />
            <x-text-input id="nick" class="block mt-1 w-full" type="text" name="nick" :value="old('nick')" required
                autofocus autocomplete="nick" />
            <x-input-error :messages="$errors->get('nick')" class="mt-2" />
        </div>
        <!-- pais Address -->
        <div>
            <x-input-label for="pais" :value="__('Pais')" />
            <x-text-input id="pais" class="block mt-1 w-full" type="text" name="pais" :value="old('pais')"
                required autofocus autocomplete="pais" />
            <x-input-error :messages="$errors->get('pais')" class="mt-2" />
        </div>
        <!-- fecha nacimiento Address -->
        <div>
            <x-input-label for="fnacimiento" :value="__('Fecha de nacimiento')" />
            <x-text-input id="fnacimiento" class="block mt-1 w-full" type="date" name="fnacimiento" :value="old('fnacimiento')"
                required autofocus autocomplete="fnacimiento" />
            <x-input-error :messages="$errors->get('fnacimiento')" class="mt-2" />
        </div>
        <!-- juego favorito -->
        <div>
            <x-input-label for="juego_favorito_id" :value="__('Juego favorito')" />
            <select name="juego_favorito_id" class="block mt-1 w-full">
                @foreach ($juegos as $juego)
                    <option class="block mt-1 w-full" value="{{ $juego->id }}">{{ $juego->nombre }}</option>
                @endforeach
                <x-input-error :messages="$errors->get('juego_favorito_id')" class="mt-2" />
            </select>
        </div>
        <!-- nivel -->
        <div>
            <x-input-label for="nivel" :value="__('Nivel')" />
            <select name="nivel" class="block mt-1 w-full">
                <option value="principiante">PRINCIPIANTE</option>
                <option value="intermedio">INTERMEDIO</option>
                <option value="alto">ALTO</option>
            </select>
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
