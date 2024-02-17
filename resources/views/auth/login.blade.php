
<x-guest-layout  >
    
<div class=" container py-5 h-100 "  style="background-color: #8B1E06;" >



<div class="row d-flex align-items-center justify-content-center h-100" >
  <div class="col-md-8 col-lg-7 col-xl-6 text-center ">
    <img src="img/logo_s.png" class="img-fluid mx-auto d-block" alt="logo image">
  </div>
</div>

<h2 class="text-center " style="font-size: 80px; font-weight: bold; color: white; background-color: #8B1E06; font-family: 'Georgia', sans-serif;">SISFORE</h2>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="" :value="__('Correo electrónico')"  class="text-white " />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 ">
            <x-input-label for="password" :value="__('Contraseña')"  class="text-white " />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-white">{{ __('Recordarme') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-white hover:text-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Iniciar sesión') }}


            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
