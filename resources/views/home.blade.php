
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
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="nope" maxlength="50" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 ">
            <x-input-label for="password" :value="__('Contraseña')"  class="text-white " />
            <button type="button" class="absolute top-10 btn btn-right ml-4 mt-3" id="togglePassword">
    <img src="/img/visuali.png"  alt="" class="h-6 w-6">
</button>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="nope" 
                            maxlength="30" />
                                                 

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            
        </div>

        <!-- Registrarse -->
        <div class="block mt-4">
                 @if (Route::has('register'))
                     <a href="{{ route('register') }}" class="inline-block primary-button">
                      {{ __('REGISTRARSE') }}
                         </a>
               @endif
       </div>

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

    <!-- JavaScript para alternar la visibilidad de la contraseña -->
    <script>
    window.addEventListener('DOMContentLoaded', (event) => {
        // Desactivar autocompletado para los campos de correo electrónico y contraseña
        document.getElementById('email').setAttribute('readonly', 'true');
        document.getElementById('password').setAttribute('readonly', 'true');
        setTimeout(function() {
            document.getElementById('email').removeAttribute('readonly');
            document.getElementById('password').removeAttribute('readonly');
        }, 1);
        
        const togglePassword = document.getElementById('togglePassword');
        const togglePasswordConfirm = document.getElementById('togglePasswordConfirm');
        const passwordInput = document.getElementById('password');
        const passwordConfirmInput = document.getElementById('password_confirmation');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            togglePassword.classList.toggle('text-gray-400');
            togglePassword.classList.toggle('text-gray-600');
            
            // Aplica o quita el tachado de la imagen asociada al botón
            const passwordIcon = document.getElementById('passwordIcon');
            if (type === 'password') {
                passwordIcon.style.textDecoration = 'none';
            } else {
                passwordIcon.style.textDecoration = 'line-through';
            }
        });

        togglePasswordConfirm.addEventListener('click', function () {
            const type = passwordConfirmInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordConfirmInput.setAttribute('type', type);
            togglePasswordConfirm.classList.toggle('text-gray-400');
            togglePasswordConfirm.classList.toggle('text-gray-600');
        });

        // Aplica o quita el tachado de la imagen asociada al botón
        const passwordConfirmIcon = document.getElementById('passwordConfirmIcon');
        if (type === 'password') {
            passwordConfirmIcon.style.textDecoration = 'none';
        } else {
            passwordConfirmIcon.style.textDecoration = 'line-through';
        }


          // Verificar requisitos de la contraseña
    const hasUpperCase = /[A-Z]/.test(password);
    const hasLowerCase = /[a-z]/.test(password);
    const hasNumbers = /[0-9]/.test(password);
    const hasSpecialCharacters = /[!@#$%^&*(),_.?":{}|<>]/.test(password);

    // Verificar si la contraseña cumple con todos los requisitos
    if (!(hasUpperCase && hasLowerCase && hasNumbers && hasSpecialCharacters)) {
        alert('La contraseña debe contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial.');
        event.preventDefault();
        return;
    }
 });

    
    
</script>

</x-guest-layout>
