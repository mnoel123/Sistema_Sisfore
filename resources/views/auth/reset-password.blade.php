<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Correo Electronico')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 ">
            <x-input-label for="password" :value="__('Contraseña')" />
            <button type="button" class="absolute top-10 left-100 ml-4 mt-3" id="togglePassword">
            <img src="/img/visuali.png" alt="" class="h-6 w-6">
        </button>
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="nope" maxlength="30"  />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        
         <!-- Confirm Password -->
    <div class="mt-4 relative">
        <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')"  class="text-white " />

        <!-- Botón para mostrar/ocultar contraseña -->
        <button type="button" class="absolute top-10 right-0 ml-4 mt-3" id="togglePasswordConfirm">
            <img src="/img/visuali.png" alt="" class="h-6 w-6">
        </button>

        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required autocomplete="nope" maxlength="30" />
       
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Restablecer Contaseña') }}
            </x-primary-button>
        </div>
    </form>
    <!-- JavaScript para alternar la visibilidad de la contraseña y validarla -->
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        // Desactivar autocompletado para los campos de registro
        document.getElementById('email').setAttribute('autocomplete', 'off');
        document.getElementById('password').setAttribute('autocomplete', 'off');
        document.getElementById('password_confirmation').setAttribute('autocomplete', 'off');
        setTimeout(function() {
            
            document.getElementById('email').removeAttribute('autocomplete');
            document.getElementById('password').removeAttribute('autocomplete');
            document.getElementById('password_confirmation').removeAttribute('autocomplete');
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
        });

        togglePasswordConfirm.addEventListener('click', function () {
            const type = passwordConfirmInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordConfirmInput.setAttribute('type', type);
            togglePasswordConfirm.classList.toggle('text-gray-400');
            togglePasswordConfirm.classList.toggle('text-gray-600');
        });

        // Validación de la contraseña y confirmación de contraseña
document.querySelector('form').addEventListener('submit', function (event) {
    const password = passwordInput.value;
    const confirmPassword = passwordConfirmInput.value;

    // Verificar si las contraseñas coinciden
    if (password !== confirmPassword) {
        alert('Las contraseñas no coinciden. Por favor, inténtalo de nuevo.');
        event.preventDefault();
        return;
    }

    // Verificar requisitos de la contraseña
    const hasUpperCase = /[A-Z]/.test(password);
    const hasLowerCase = /[a-z]/.test(password);
    const hasNumbers = /[0-9]/.test(password);
    const hasSpecialCharacters = /[!@#$%^&*(),_.?":{}|<>]/.test(password);


    // Verificar requisitos de la contraseña
if (!hasUpperCase || !hasLowerCase || !hasNumbers || !hasSpecialCharacters || password.length < 8) {
    alert('La contraseña debe contener al menos una letra mayúscula, una letra minúscula, un número, un carácter especial y tener una longitud mínima de 8 caracteres.');
    event.preventDefault();
    return;
}

   
 });

    });  
</script>
</x-guest-layout>
