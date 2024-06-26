<nav x-data="{ open: false }" class="bg-white border-b border-gray-100" style="background-color: #8B1E06; ">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7x2 mx-auto px-4 sm:px-6 lg:px-8  " style="background-color: #8B1E06;  ">

        <div class="flex justify-between h-20">
            <div class="flex">
                
                <!-- Logo -->
                <div class="shrink-0 flex items-center"  style="background-color: #8B1E06;">
                  
                        <img src="img/menu.jpg "   alt="Mi Imagen" class="block h-9 w-auto fill-current text-gray-800" />
                    
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-5  sm:ms-10 sm:flex " style=" display: flex; gap: 1rem; background-color: #8B1E06;  font-weight: bold; font-family='Georgia', sans-serif; text-align= center; ">
                   
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" style="color: white;font-weight: bold;  font-size: 16px; font-family: Arial, sans-serif;" onmouseover="this.style.color='LemonChiffon';" onmouseout="this.style.color='white';">
                     {{ __('SISFORE') }}
                 </x-nav-link>

                <x-nav-link :href="route('personas')" :active="request()->routeIs('personas')" style="color: white;  font-weight: bold; font-size: 16px; font-family: Arial, sans-serif;" onmouseover="this.style.color='LemonChiffon';" onmouseout="this.style.color='white';">
                    {{ __('PERSONAS') }}
                 </x-nav-link>

                <x-nav-link :href="route('planillas')" :active="request()->routeIs('planillas')" style="color: white; font-size: 16px; font-weight: bold; font-family: Arial, sans-serif;" onmouseover="this.style.color='LemonChiffon';" onmouseout="this.style.color='white';">
                    {{ __('PLANILLAS') }}
                </x-nav-link>

                 <x-nav-link :href="route('cuentas')" :active="request()->routeIs('cuentas')" style="color: white; font-size: 16px;  font-weight: bold; font-family: Arial, sans-serif;" onmouseover="this.style.color='LemonChiffon';" onmouseout="this.style.color='white';">
                    {{ __('ESTADOS FINANCIEROS') }}
                </x-nav-link>

                 <x-nav-link :href="route('reportes')" :active="request()->routeIs('reportes')" style="color: white; font-weight: bold; font-size: 16px; font-family: Arial, sans-serif;" onmouseover="this.style.color='LemonChiffon';" onmouseout="this.style.color='white';">
                    {{ __('REPORTES') }}
                 </x-nav-link>

                <x-nav-link :href="route('bitacora')" :active="request()->routeIs('bitacora')" style="color: white; font-size: 16px; font-weight: bold; font-family: Arial, sans-serif;" onmouseover="this.style.color='LemonChiffon';" onmouseout="this.style.color='white';">
                    {{ __('BITACORA') }}
                </x-nav-link>

                </div>
            </div>


            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6" >
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-red bg-white hover:text-gray-700 font-bold focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1"style="background-color: white; ">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content"  class="text-gray-900" >
                       

                        <!-- Authentication -->
                        <form method="POST"  action="{{ route('logout') }}" >
                            @csrf

                            <x-dropdown-link :href="route('logout') "
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar Sesion') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>


                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden ">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out  font-bold">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Panel de Control') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4 ">
                <div class="font-medium text-base ">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm ">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1 text-gray-900">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Perfil') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Cerrar Sesion') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
