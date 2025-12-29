@extends('layouts.app')

@section('title', 'Gallery')

@section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-r from-secondary to-gray-900 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold mb-4" data-aos="fade-up">Portfolio Kami</h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Lihat hasil kerja profesional kami dalam berbagai project tuning dan modifikasi
        </p>
    </div>
</section>

<!-- Filter Tabs -->
<section class="py-8 bg-white border-b">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center gap-4">
            <button class="filter-btn active px-6 py-2 rounded-full font-semibold transition-all" data-filter="all">
                Semua Project
            </button>
            <button class="filter-btn px-6 py-2 rounded-full font-semibold transition-all" data-filter="engine">
                Engine Build
            </button>
            <button class="filter-btn px-6 py-2 rounded-full font-semibold transition-all" data-filter="ecu">
                ECU Remap
            </button>
            <button class="filter-btn px-6 py-2 rounded-full font-semibold transition-all" data-filter="boreup">
                Bore Up
            </button>
            <button class="filter-btn px-6 py-2 rounded-full font-semibold transition-all" data-filter="wiring">
                Wiring
            </button>
        </div>
    </div>
</section>

<!-- Gallery Grid -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-6" id="gallery-grid">
            
            <!-- Gallery Item 1 -->
            <div class="gallery-item engine" data-aos="zoom-in">
                <div class="relative overflow-hidden rounded-xl shadow-lg group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=600" alt="Engine Build 1" class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <span class="bg-blue-600 px-3 py-1 rounded-full text-xs font-semibold mb-2 inline-block">ENGINE BUILD</span>
                            <h3 class="font-bold text-xl mb-2">Honda Civic Type R Turbo</h3>
                            <p class="text-sm text-gray-300">Full engine rebuild with turbo upgrade - 450HP</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs"><i class="fas fa-calendar mr-2"></i>Des 2024</span>
                                <button class="bg-primary hover:bg-red-700 px-4 py-2 rounded-lg text-sm font-semibold">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="gallery-item ecu" data-aos="zoom-in" data-aos-delay="100">
                <div class="relative overflow-hidden rounded-xl shadow-lg group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=600" alt="ECU Remap 1" class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <span class="bg-purple-600 px-3 py-1 rounded-full text-xs font-semibold mb-2 inline-block">ECU REMAP</span>
                            <h3 class="font-bold text-xl mb-2">BMW M3 F80 Stage 2</h3>
                            <p class="text-sm text-gray-300">Custom ECU mapping & dyno tuning - 520HP</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs"><i class="fas fa-calendar mr-2"></i>Nov 2024</span>
                                <button class="bg-primary hover:bg-red-700 px-4 py-2 rounded-lg text-sm font-semibold">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="gallery-item boreup" data-aos="zoom-in" data-aos-delay="200">
                <div class="relative overflow-hidden rounded-xl shadow-lg group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1615906655593-ad0386982a0f?w=600" alt="Bore Up 1" class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <span class="bg-green-600 px-3 py-1 rounded-full text-xs font-semibold mb-2 inline-block">BORE UP</span>
                            <h3 class="font-bold text-xl mb-2">Yamaha R15 Racing Spec</h3>
                            <p class="text-sm text-gray-300">200cc bore up with complete racing setup</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs"><i class="fas fa-calendar mr-2"></i>Okt 2024</span>
                                <button class="bg-primary hover:bg-red-700 px-4 py-2 rounded-lg text-sm font-semibold">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 4 -->
            <div class="gallery-item wiring" data-aos="zoom-in">
                <div class="relative overflow-hidden rounded-xl shadow-lg group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1599420186946-7b6fb4e297f0?w=600" alt="Wiring 1" class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <span class="bg-yellow-600 px-3 py-1 rounded-full text-xs font-semibold mb-2 inline-block">CUSTOM WIRING</span>
                            <h3 class="font-bold text-xl mb-2">Nissan GTR R35 Wire Tuck</h3>
                            <p class="text-sm text-gray-300">Clean wire tuck with aftermarket ECU install</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs"><i class="fas fa-calendar mr-2"></i>Sep 2024</span>
                                <button class="bg-primary hover:bg-red-700 px-4 py-2 rounded-lg text-sm font-semibold">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 5 -->
            <div class="gallery-item engine" data-aos="zoom-in" data-aos-delay="100">
                <div class="relative overflow-hidden rounded-xl shadow-lg group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=600" alt="Engine Build 2" class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <span class="bg-blue-600 px-3 py-1 rounded-full text-xs font-semibold mb-2 inline-block">ENGINE BUILD</span>
                            <h3 class="font-bold text-xl mb-2">Toyota Supra MK5 B58</h3>
                            <p class="text-sm text-gray-300">Forged internals with hybrid turbo - 700HP</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs"><i class="fas fa-calendar mr-2"></i>Agu 2024</span>
                                <button class="bg-primary hover:bg-red-700 px-4 py-2 rounded-lg text-sm font-semibold">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 6 -->
            <div class="gallery-item ecu" data-aos="zoom-in" data-aos-delay="200">
                <div class="relative overflow-hidden rounded-xl shadow-lg group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=600" alt="ECU Remap 2" class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <span class="bg-purple-600 px-3 py-1 rounded-full text-xs font-semibold mb-2 inline-block">ECU REMAP</span>
                            <h3 class="font-bold text-xl mb-2">Audi RS3 8V</h3>
                            <p class="text-sm text-gray-300">Stage 2+ with custom tuning - 480HP</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs"><i class="fas fa-calendar mr-2"></i>Jul 2024</span>
                                <button class="bg-primary hover:bg-red-700 px-4 py-2 rounded-lg text-sm font-semibold">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 7 -->
            <div class="gallery-item boreup" data-aos="zoom-in">
                <div class="relative overflow-hidden rounded-xl shadow-lg group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600" alt="Bore Up 2" class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <span class="bg-green-600 px-3 py-1 rounded-full text-xs font-semibold mb-2 inline-block">BORE UP</span>
                            <h3 class="font-bold text-xl mb-2">Kawasaki Ninja 250 Build</h3>
                            <p class="text-sm text-gray-300">320cc street/track setup with ECU</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs"><i class="fas fa-calendar mr-2"></i>Jun 2024</span>
                                <button class="bg-primary hover:bg-red-700 px-4 py-2 rounded-lg text-sm font-semibold">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 8 -->
            <div class="gallery-item engine" data-aos="zoom-in" data-aos-delay="100">
                <div class="relative overflow-hidden rounded-xl shadow-lg group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1542362567-b07e54358753?w=600" alt="Engine Build 3" class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <span class="bg-blue-600 px-3 py-1 rounded-full text-xs font-semibold mb-2 inline-block">ENGINE BUILD</span>
                            <h3 class="font-bold text-xl mb-2">Mitsubishi Evo X 4B11T</h3>
                            <p class="text-sm text-gray-300">Built block with big turbo setup - 650HP</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs"><i class="fas fa-calendar mr-2"></i>Mei 2024</span>
                                <button class="bg-primary hover:bg-red-700 px-4 py-2 rounded-lg text-sm font-semibold">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 9 -->
            <div class="gallery-item wiring" data-aos="zoom-in" data-aos-delay="200">
                <div class="relative overflow-hidden rounded-xl shadow-lg group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?w=600" alt="Wiring 2" class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <span class="bg-yellow-600 px-3 py-1 rounded-full text-xs font-semibold mb-2 inline-block">CUSTOM WIRING</span>
                            <h3 class="font-bold text-xl mb-2">Subaru WRX STI Race Harness</h3>
                            <p class="text-sm text-gray-300">Full race harness with PDM installation</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs"><i class="fas fa-calendar mr-2"></i>Apr 2024</span>
                                <button class="bg-primary hover:bg-red-700 px-4 py-2 rounded-lg text-sm font-semibold">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-secondary mb-4">Testimoni Customer</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Apa kata mereka yang sudah mempercayakan kendaraannya kepada kami
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-50 p-6 rounded-xl shadow-lg" data-aos="fade-up">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold mr-4">
                        AB
                    </div>
                    <div>
                        <h3 class="font-bold">Andi Budiman</h3>
                        <div class="text-yellow-500">★★★★★</div>
                    </div>
                </div>
                <p class="text-gray-600 italic">
                    "Pekerjaan sangat rapi dan profesional. Bore up Ninja 250 saya hasilnya luar biasa! Tenaga naik signifikan tapi tetap nyaman untuk harian."
                </p>
            </div>

            <div class="bg-gray-50 p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold mr-4">
                        RH
                    </div>
                    <div>
                        <h3 class="font-bold">Rudi Hartono</h3>
                        <div class="text-yellow-500">★★★★★</div>
                    </div>
                </div>
                <p class="text-gray-600 italic">
                    "ECU remap BMW saya hasil dyno mencapai 520HP! Mekaniknya sangat paham dan detil dalam menjelaskan. Highly recommended!"
                </p>
            </div>

            <div class="bg-gray-50 p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold mr-4">
                        DW
                    </div>
                    <div>
                        <h3 class="font-bold">Doni Wijaya</h3>
                        <div class="text-yellow-500">★★★★★</div>
                    </div>
                </div>
                <p class="text-gray-600 italic">
                    "Engine rebuild Civic saya ditangani dengan sangat baik. Komunikasi lancar, progress update rutin, hasilnya memuaskan!"
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-primary to-red-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-6" data-aos="fade-up">Siap Wujudkan Project Impian Anda?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Diskusikan project Anda dengan tim expert kami dan dapatkan solusi terbaik
        </p>
        <a href="https://wa.me/6287862164635" target="_blank" class="bg-white text-primary hover:bg-gray-100 font-bold py-4 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 inline-block" data-aos="fade-up" data-aos-delay="200">
            <i class="fab fa-whatsapp mr-2"></i>Mulai Konsultasi
        </a>
    </div>
</section>

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true
  });

  // Filter functionality
  const filterBtns = document.querySelectorAll('.filter-btn');
  const galleryItems = document.querySelectorAll('.gallery-item');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      // Remove active class from all buttons
      filterBtns.forEach(b => {
        b.classList.remove('active', 'bg-primary', 'text-white');
        b.classList.add('bg-gray-200', 'text-gray-700');
      });
      
      // Add active class to clicked button
      btn.classList.add('active', 'bg-primary', 'text-white');
      btn.classList.remove('bg-gray-200', 'text-gray-700');

      const filterValue = btn.getAttribute('data-filter');

      galleryItems.forEach(item => {
        if (filterValue === 'all' || item.classList.contains(filterValue)) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });

  // Set initial active state
  filterBtns[0].classList.add('bg-primary', 'text-white');
  filterBtns[0].classList.remove('bg-gray-200', 'text-gray-700');
</script>

<style>
  .filter-btn {
    @apply bg-gray-200 text-gray-700;
  }
  .filter-btn.active {
    @apply bg-primary text-white;
  }
</style>

@endsection
