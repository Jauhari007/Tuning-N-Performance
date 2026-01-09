<!-- Navbar -->
<nav class="bg-secondary text-white fixed top-0 left-0 right-0 z-50 shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <div class="bg-white p-1 rounded-lg">
                    <img src="{{ asset('/images/niketuning.png') }}" alt="Nike Tuning Logo" class="w-12 h-12 object-contain">
                </div>
                <div>
                    <h1 class="text-xl font-bold">Nike Tuning</h1>
                    <p class="text-xs text-gray-400">N-Performance</p>
                </div>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="hover:text-primary transition-colors {{ request()->routeIs('home') ? 'text-primary' : '' }}">Home</a>
                <a href="{{ route('services') }}" class="hover:text-primary transition-colors {{ request()->routeIs('services') ? 'text-primary' : '' }}">Services</a>
                <a href="{{ route('gallery') }}" class="hover:text-primary transition-colors {{ request()->routeIs('gallery') ? 'text-primary' : '' }}">Gallery</a>
                <a href="{{ route('about') }}" class="hover:text-primary transition-colors {{ request()->routeIs('about') ? 'text-primary' : '' }}">About</a>
                <a href="{{ route('contact') }}" class="hover:text-primary transition-colors {{ request()->routeIs('contact') ? 'text-primary' : '' }}">Contact</a>
                <a href="https://wa.me/6287862164635" target="_blank" class="btn-primary">
                    <i class="fab fa-whatsapp mr-2"></i>WhatsApp
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-white">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <div class="flex flex-col space-y-3">
                <a href="{{ route('home') }}" class="hover:text-primary transition-colors {{ request()->routeIs('home') ? 'text-primary' : '' }}">Home</a>
                <a href="{{ route('services') }}" class="hover:text-primary transition-colors {{ request()->routeIs('services') ? 'text-primary' : '' }}">Services</a>
                <a href="{{ route('gallery') }}" class="hover:text-primary transition-colors {{ request()->routeIs('gallery') ? 'text-primary' : '' }}">Gallery</a>
                <a href="{{ route('about') }}" class="hover:text-primary transition-colors {{ request()->routeIs('about') ? 'text-primary' : '' }}">About</a>
                <a href="{{ route('contact') }}" class="hover:text-primary transition-colors {{ request()->routeIs('contact') ? 'text-primary' : '' }}">Contact</a>
                <a href="https://wa.me/6287862164635" target="_blank" class="btn-primary inline-block text-center">
                    <i class="fab fa-whatsapp mr-2"></i>WhatsApp
                </a>
            </div>
        </div>
    </div>
</nav>
