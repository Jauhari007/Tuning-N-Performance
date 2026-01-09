@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-secondary via-gray-900 to-secondary text-white overflow-hidden">
    <div class="container mx-auto px-4 py-16 relative z-10">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6" data-aos="fade-right">
                <div class="inline-block bg-primary text-white px-4 py-2 rounded-full text-sm font-semibold">
                    🏁 Best Tuning Performance
                </div>
                <h1 class="text-5xl md:text-6xl font-bold leading-tight">
                    Suku Cadang Berkualitas Tinggi<br/>
                    <span class="text-primary">Dengan Harga Terjangkau</span>
                </h1>
                <p class="text-lg text-gray-300 leading-relaxed">
                    Spesialis tuning dan modifikasi kendaraan sepeda motor dan mobil dengan teknologi terkini. Wujudkan performa maksimal kendaraan Anda bersama kami!
                </p>
                <div class="flex flex-wrap gap-4 pt-4">  
                    <a href="{{ route('services') }}" class="btn-primary text-lg">
                        <i class="fas fa-tools mr-2"></i>Lihat Layanan
                    </a>
                    <a href="{{ route('contact') }}" class="btn-secondary text-lg">
                        <i class="fas fa-phone mr-2"></i>Konsultasi Gratis
                    </a>
                </div>
                <div class="grid grid-cols-3 gap-6 pt-8">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-primary mb-1">10+</div>
                        <div class="text-sm text-gray-400">Tahun Pengalaman</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-primary mb-1">1000+</div>
                        <div class="text-sm text-gray-400">Mobil Ditangani</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-primary mb-1">98%</div>
                        <div class="text-sm text-gray-400">Kepuasan Client</div>
                    </div>
                </div>
            </div>
            <div class="relative flex items-start justify-center mt-8 md:mt-0 md:-mt-8" data-aos="fade-left">
                <div class="relative z-10 w-full">
                    <img src="{{ asset('images/kijang.png') }}" alt="KIJANG" class="w-full h-auto object-cover rounded-lg md:rounded-none" style="max-height: 450px; object-position: center;" loading="eager" fetchpriority="high">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Highlight -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-secondary mb-4">Layanan Unggulan Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Kami menyediakan berbagai layanan tuning dan modifikasi dengan standar kualitas internasional
            </p>
        </div>

        <div class="grid md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Service 1 -->
            <div class="bg-gradient-to-br from-red-50 to-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-primary text-white w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
                    <i class="fas fa-wrench text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-center mb-2">Perbaikan</h3>
                <p class="text-gray-600 text-center text-sm">General repair & maintenance rutin</p>
                <a href="{{ route('services') }}" class="block text-center text-primary font-semibold mt-4 hover:underline">
                    Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <!-- Service 2 -->
            <div class="bg-gradient-to-br from-blue-50 to-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
                    <i class="fas fa-cog text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-center mb-2">Engine</h3>
                <p class="text-gray-600 text-center text-sm">Rebuild & porting polish profesional</p>
                <a href="{{ route('services') }}" class="block text-center text-blue-600 font-semibold mt-4 hover:underline">
                    Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <!-- Service 3 -->
            <div class="bg-gradient-to-br from-yellow-50 to-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-yellow-500 text-white w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
                    <i class="fas fa-bolt text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-center mb-2">Wiring</h3>
                <p class="text-gray-600 text-center text-sm">Custom wiring & electrical system</p>
                <a href="{{ route('services') }}" class="block text-center text-yellow-600 font-semibold mt-4 hover:underline">
                    Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <!-- Service 4 -->
            <div class="bg-gradient-to-br from-green-50 to-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer" data-aos="fade-up" data-aos-delay="400">
                <div class="bg-green-600 text-white w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
                    <i class="fas fa-tachometer-alt text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-center mb-2">Bore Up</h3>
                <p class="text-gray-600 text-center text-sm">Bore up harian & racing</p>
                <a href="{{ route('services') }}" class="block text-center text-green-600 font-semibold mt-4 hover:underline">
                    Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <!-- Service 5 -->
            <div class="bg-gradient-to-br from-purple-50 to-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer" data-aos="fade-up" data-aos-delay="500">
                <div class="bg-purple-600 text-white w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
                    <i class="fas fa-laptop-code text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-center mb-2">Remap ECU</h3>
                <p class="text-gray-600 text-center text-sm">ECU tuning & dyno optimization</p>
                <a href="{{ route('services') }}" class="block text-center text-purple-600 font-semibold mt-4 hover:underline">
                    Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <img src="{{ asset('images/boreup.jpg') }}" alt="Workshop" class="rounded-2xl shadow-2xl" loading="lazy" decoding="async">
            </div>
            <div data-aos="fade-left">
                <h2 class="text-4xl font-bold text-secondary mb-6">Mengapa Memilih Nike Tuning?</h2>
                <div class="space-y-4">
                    <div class="flex items-start space-x-4">
                        <div class="bg-primary text-white w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Mekanik Berpengalaman</h3>
                            <p class="text-gray-600">Tim teknisi profesional dengan standar kompetensi internasional dan jam terbang lebih dari 10 tahun</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="bg-primary text-white w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Peralatan Modern</h3>
                            <p class="text-gray-600">Dilengkapi dengan dyno test, scanner diagnostik, dan tools profesional terkini</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="bg-primary text-white w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Precision Tuning</h3>
                            <p class="text-gray-600">Setiap tuning dilakukan dengan pengukuran presisi untuk hasil optimal dan aman</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="bg-primary text-white w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Garansi Terpercaya</h3>
                            <p class="text-gray-600">Kami memberikan garansi untuk semua pekerjaan yang kami lakukan</p>
                        </div>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="btn-primary mt-8 inline-block">
                    <i class="fas fa-info-circle mr-2"></i>Tentang Kami
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Preview -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-secondary mb-4">Portfolio Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Lihat hasil kerja kami dan testimoni dari customer yang puas
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-6">
            <div class="relative overflow-hidden rounded-xl shadow-lg group cursor-pointer" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{ asset('images/mb12.png') }}" alt="Project 1" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500" loading="lazy" decoding="async">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="font-bold text-lg">Engine Build</h3>
                        <p class="text-sm">Honda City Turbo</p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden rounded-xl shadow-lg group cursor-pointer" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('images/mb6.jpg') }}" alt="Project 2" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500" loading="lazy" decoding="async">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="font-bold text-lg">ECU Remap</h3>
                        <p class="text-sm">Isuzu Panther</p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden rounded-xl shadow-lg group cursor-pointer" data-aos="zoom-in" data-aos-delay="300">
                <img src="{{ asset('images/mt1.jpg') }}" alt="Project 3" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500" loading="lazy" decoding="async">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="font-bold text-lg">Bore Up</h3>
                        <p class="text-sm">Honda CB Racing</p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden rounded-xl shadow-lg group cursor-pointer" data-aos="zoom-in" data-aos-delay="400">
                <img src="{{ asset('images/mb2.jpg') }}" alt="Project 4" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500" loading="lazy" decoding="async">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="font-bold text-lg">Custom Wiring</h3>
                        <p class="text-sm">Mazda2</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-8">
            <a href="{{ route('gallery') }}" class="btn-primary">
                <i class="fas fa-images mr-2"></i>Lihat Semua Gallery
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-primary to-red-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-6" data-aos="fade-up">Siap Tingkatkan Performa Kendaraan Anda?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Konsultasikan kebutuhan tuning Anda dengan tim expert kami sekarang juga!
        </p>
        <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
            <a href="https://wa.me/6287862164635" target="_blank" class="bg-white text-primary hover:bg-gray-100 font-bold py-4 px-8 rounded-lg transition-all duration-300 transform hover:scale-105">
                <i class="fab fa-whatsapp mr-2"></i>Chat WhatsApp
            </a>
            <a href="{{ route('contact') }}" class="bg-transparent border-2 border-white hover:bg-white hover:text-primary font-bold py-4 px-8 rounded-lg transition-all duration-300">
                <i class="fas fa-calendar-alt mr-2"></i>Booking Sekarang
            </a>
        </div>
    </div>
</section>

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true
  });
</script>

@endsection
