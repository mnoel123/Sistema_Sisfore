<x-guest-layout>

<div class="row d-flex align-items-center justify-content-center h-100">
  <div class="col-md-8 col-lg-7 col-xl-6 text-center">
    <img src="img/logo_s.png" class="img-fluid mx-auto d-block" alt="logo image">
  </div>
</div>

<h2 class="text-center" style="font-size: 80px; font-weight: bold; color: white; font-family: 'Georgia', sans-serif;">SISFORE</h2>

<form id="registrationForm" method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Nombre -->
    <div class="mt-4">
        <x-input-label for="name" :value="__('Nombre')"  class="text-white "  />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="off" maxlength="60" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Nombre usuario -->
    <div class="mt-4">
        <x-input-label for="name" :value="__('Usuario')"  class="text-white "  />
        <x-text-input id="nom_usuario" class="block mt-1 w-full" type="text" name="nom_usuario" :value="old('nom_usuario')" required autofocus autocomplete="nope" maxlength="15" />
        <x-input-error :messages="$errors->get('nom_usuario')" class="mt-2" />
    </div>

    <!-- Email  -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Correo Electronico')"  class="text-white "  />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="nope"  maxlength="50"/>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4 relative">
        <x-input-label for="password" :value="__('Contraseña')" class="text-white " />
        <!-- Botón para mostrar/ocultar contraseña -->
        <button type="button" class="absolute top-10 left-100 ml-4 mt-3" id="togglePassword">
            <img src="/img/visuali.png" alt="" class="h-6 w-6">
        </button>

        <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="nope" maxlength="30" />
       
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
        <a class="underline text-sm text-white hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
            {{ __('¿Ya estás registrado?') }}
        </a>

        <x-primary-button class="ms-4">
            {{ __('Registrarse') }}
        </x-primary-button>
    </div>
</form>

<!-- JavaScript para alternar la visibilidad de la contraseña y validarla -->
<script>
 

    window.addEventListener('DOMContentLoaded', (event) => {
        // Desactivar autocompletado para los campos de registro
        document.getElementById('name').setAttribute('autocomplete', 'off');
        document.getElementById('email').setAttribute('autocomplete', 'off');
        document.getElementById('password').setAttribute('autocomplete', 'off');
        document.getElementById('password_confirmation').setAttribute('autocomplete', 'off');
        setTimeout(function() {
            document.getElementById('name').removeAttribute('autocomplete');
            document.getElementById('email').removeAttribute('autocomplete');
            document.getElementById('password').removeAttribute('autocomplete');
            document.getElementById('password_confirmation').removeAttribute('autocomplete');
        }, 1);
     
        

        const togglePassword = document.getElementById('togglePassword');
        const togglePasswordConfirm = document.getElementById('togglePasswordConfirm');
        const passwordInput = document.getElementById('password');
        const passwordConfirmInput = document.getElementById('password_confirmation');
        const emailInput = document.getElementById('email');

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

        let emailChanged = false; // Variable para rastrear si el campo de correo electrónico ha sido modificado

emailInput.addEventListener('input', function () {
    emailChanged = true; // Marcar que el campo de correo electrónico ha sido modificado
});

emailInput.addEventListener('blur', function () {
    if (emailChanged) { // Verificar si el campo de correo electrónico ha sido modificado
        const email = emailInput.value.toLowerCase();
        if (email.includes('@')) {
            const [username, domain] = email.split('@');
            const isValidUsername = /^[a-z0-9.]+$/.test(username); // Permitir letras minúsculas, números y puntos en el nombre de usuario
            const isValidDomain = /^[^\s@]+\.[^\s@]+$/.test(domain); // Verificar el formato del dominio
            
            if (!isValidUsername || !isValidDomain) {
                alert('Por favor, introduce una dirección de correo electrónico válida.');
                emailInput.classList.add('border', 'border-red-500');
            } else {
                emailInput.classList.remove('border', 'border-red-500');
            }
        } else {
            alert('Por favor, introduce una dirección de correo electrónico válida.'); // Avisar si falta el símbolo '@'
            emailInput.classList.add('border', 'border-red-500');
        }
    }
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

     // Validar si se cumplen todos los requisitos
     if (!(hasUpperCase && hasLowerCase && hasNumbers && hasSpecialCharacters)) {
        alert('La contraseña debe contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial.');
        event.preventDefault();
        return;
    }
 });

 // Obtener referencia al input del nombre de usuario
 var inputUsuario = document.getElementById('nom_usuario');

// Agregar un listener para el evento de input
inputUsuario.addEventListener('input', function() {
    // Obtener el valor del input
    var valor = inputUsuario.value;

    // Expresión regular para validar que solo contenga números y letras
    var regex = /^[a-zA-Z0-9]*$/;

    // Validar el valor del input con la expresión regular
    if (!regex.test(valor)) {
        // Si el valor no coincide con la expresión regular, eliminar los caracteres no permitidos
        inputUsuario.value = valor.replace(/[^a-zA-Z0-9]/g, '');
    }
});

    });  


inputUsuario = document.getElementById('nom_usuario');

inputUsuario.addEventListener('input', function() {
    const valor = inputUsuario.value.trim();
    const regex = /^[a-zA-Z]+(?: [a-zA-Z]+)*$/; // Solo letras y un espacio entre palabras

    if (!regex.test(valor)) {
        inputUsuario.value = valor.replace(/[^a-zA-Z ]/g, ''); // Eliminar caracteres no permitidos
    }
});

</script>



</x-guest-layout>

