<!-- Footer -->
<footer class="bg-secondary text-white pt-16 pb-8">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8 mb-8">
            <!-- About -->
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div class="bg-primary p-2 rounded-lg">
                        <i class="fas fa-car-side text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg">Nike Tuning</h3>
                        <p class="text-xs text-gray-400">N-Performance</p>
                    </div>
                </div>
                <p class="text-gray-400 text-sm">
                    Bengkel tuning dan modifikasi terpercaya dengan pengalaman lebih dari 10 tahun. Spesialis engine rebuild, ECU remap, dan performance upgrade.
                </p>
            </div>

            <!-- Services -->
            <div>
                <h3 class="font-bold text-lg mb-4 text-primary">Layanan Kami</h3>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Perbaikan Umum</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Engine Rebuild</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Custom Wiring</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Bore Up</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">ECU Remap</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="font-bold text-lg mb-4 text-primary">Kontak</h3>
                <ul class="space-y-3 text-sm text-gray-400">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt text-primary mr-3 mt-1"></i>
                        <span>Jl. Sawunggaling III No.19, Jemundo, Kec. Taman, Kab. Sidoarjo</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone text-primary mr-3"></i>
                        <span>+62 878-6216-4635</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope text-primary mr-3"></i>
                        <span>info@niketuning.com</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-clock text-primary mr-3"></i>
                        <span>Senin - Sabtu: 07:30 - 18:30</span>
                    </li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h3 class="font-bold text-lg mb-4 text-primary">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="#" class="bg-gray-700 hover:bg-primary w-10 h-10 rounded-full flex items-center justify-center transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/nike_tuning.official/" target="_blank" class="bg-gray-700 hover:bg-primary w-10 h-10 rounded-full flex items-center justify-center transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="bg-gray-700 hover:bg-primary w-10 h-10 rounded-full flex items-center justify-center transition-colors">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="bg-gray-700 hover:bg-primary w-10 h-10 rounded-full flex items-center justify-center transition-colors">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
                <div class="mt-6">
                    <a href="https://wa.me/6287862164635" target="_blank" class="btn-primary block text-center">
                        <i class="fab fa-whatsapp mr-2"></i>Chat WhatsApp
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-700 pt-6 text-center text-sm text-gray-400">
            <p>&copy; 2026 Nike Tuning N-Performance. All rights reserved.</p>
            <p>Developed by Ariyoidev</p>
        </div>
    </div>
</footer>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/6287862164635" target="_blank" class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg transition-all duration-300 hover:scale-110 z-50">
    <i class="fab fa-whatsapp text-3xl"></i>
</a>

<script>
    // Mobile Menu Toggle
    document.getElementById('mobile-menu-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });

    // Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
</script>
