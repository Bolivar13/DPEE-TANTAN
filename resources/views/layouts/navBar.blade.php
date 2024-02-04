<head>
    <!-- icon link -->
    <link rel="shortcut icon" href="./img/logo (1).ico" type="image/x-icon">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- css link -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- fonts link -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="./assets/css/styles.css">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<<<<<<< HEAD

=======
        
>>>>>>> 4447606fbc3116dd24972f4b7c06707113612a4e
    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="./assets/css/styles.css">

</head>
<!-- icon link -->
<link rel="shortcut icon" href="/img/logo (1).ico" type="image/x-icon">

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
<<<<<<< HEAD
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('principal.index') }}">
                        <!-- <img style="height: 50px;" src="logo.png" alt=""> -->
                        <!-- DPEE -->
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />

                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="/" :active="request()->routeIs('principal.index')">
                        {{ __('principal') }}
                    </x-nav-link>
                    <x-nav-link href="/services" :active="request()->routeIs('services.index')">
                        {{ __('services') }}
                    </x-nav-link>
                    <x-nav-link href="/projets" :active="request()->routeIs('projets.index')">
                        {{ __('projets') }}
                    </x-nav-link>
                    <x-nav-link href="/contacts" :active="request()->routeIs('contacts.index')">
                        {{ __('contact') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
=======
    <div class="navbar ">
        <div class="pages max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="pages flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                            <img style="height: 50px;" src="./img/logo.png" alt="">
                    </div>
    
                    <!-- Navigation Links -->
                    <div class="links hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link href="/" :active="request()->routeIs('principal.index')">
                            {{ __('Principal') }}
                        </x-nav-link>
                        <x-nav-link href="/news" :active="request()->routeIs('news.index')">
                            {{ __('News') }}
                        </x-nav-link>
                        <x-nav-link href="/services" :active="request()->routeIs('services.index')">
                            {{ __('Services') }}
                        </x-nav-link>
                        <x-nav-link href="/" :active="request()->routeIs('projects.index')">
                            {{ __('Projets') }}
                        </x-nav-link>
                        <x-nav-link href="/" :active="request()->routeIs('contact.index')">
                            {{ __('Contactez nous') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="center" width="30">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    {{ __('language') }}
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
        
                            <x-slot name="content">
                                <x-dropdown-link>
                                    <img style="width: 25px;height: 25px;" src="./img/maroc.png" alt="">
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    <img style="width: 25px;height: 25px;" src="./img/france.png" alt="">
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    <img style="width: 25px;height: 25px;" src="./img/usa.png" alt="">
                                </x-dropdown-link>
        
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
    
                <!-- Settings Dropdown -->
                
    
                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
>>>>>>> 4447606fbc3116dd24972f4b7c06707113612a4e
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="/" :active="request()->routeIs('principal.index')">
                {{ __('Principal') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="/services" :active="request()->routeIs('services.index')">
                {{ __('Services') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="/projets" :active="request()->routeIs('projets.index')">
                {{ __('Projets') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="/contacts" :active="request()->routeIs('contacts.index')">
                {{ __('Contactez-vous') }}
            </x-responsive-nav-link>
        </div>


    </div>
</nav>