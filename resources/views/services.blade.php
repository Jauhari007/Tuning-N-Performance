@extends('layouts.app')

@section('title', 'Services')

@section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-r from-secondary to-gray-900 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold mb-4" data-aos="fade-up">Layanan Kami</h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Solusi lengkap untuk semua kebutuhan tuning dan modifikasi kendaraan Anda
        </p>
    </div>
</section>

<!-- Services Grid -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        
        <!-- Service 1: Perbaikan -->
        <div class="bg-white rounded-2xl shadow-xl mb-12 overflow-hidden" data-aos="fade-up">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="p-8 md:p-12">
                    <div class="flex items-center mb-6">
                        <div class="bg-red-100 text-primary w-16 h-16 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-wrench text-3xl"></i>
                        </div>
                        <h2 class="text-3xl font-bold text-secondary">Perbaikan Umum</h2>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Layanan perbaikan dan maintenance rutin untuk menjaga performa optimal kendaraan Anda. Kami menangani semua jenis masalah dengan diagnosis yang akurat.
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mr-3 mt-1"></i>
                            <span>General Repair - Perbaikan umum mesin dan komponen</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mr-3 mt-1"></i>
                            <span>Diagnostik Mesin - Scanning dan analisa komputer</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mr-3 mt-1"></i>
                            <span>Maintenance Rutin - Service berkala dan tune-up</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mr-3 mt-1"></i>
                            <span>Troubleshooting - Identifikasi dan solusi masalah</span>
                        </li>
                    </ul>
                    <a href="https://wa.me/6287862164635?text=Halo, saya ingin konsultasi tentang layanan Perbaikan" target="_blank" class="btn-primary inline-block">
                        <i class="fab fa-whatsapp mr-2"></i>Konsultasi Sekarang
                    </a>
                </div>
                <div class="h-full">
                    <img src="https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?w=800" alt="Perbaikan" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <!-- Service 2: Engine -->
        <div class="bg-white rounded-2xl shadow-xl mb-12 overflow-hidden" data-aos="fade-up">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="h-full order-2 md:order-1">
                    <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=800" alt="Engine" class="w-full h-full object-cover">
                </div>
                <div class="p-8 md:p-12 order-1 md:order-2">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-100 text-blue-600 w-16 h-16 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-cog text-3xl"></i>
                        </div>
                        <h2 class="text-3xl font-bold text-secondary">Engine Specialist</h2>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Spesialis engine rebuild dan performance upgrade. Dari overhaul standard hingga full racing preparation dengan teknologi terkini.
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mr-3 mt-1"></i>
                            <span>Engine Rebuild - Overhaul mesin lengkap profesional</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mr-3 mt-1"></i>
                            <span>Porting Polish - CNC porting untuk aliran optimal</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mr-3 mt-1"></i>
                            <span>Performance Upgrade - Peningkatan tenaga mesin</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mr-3 mt-1"></i>
                            <span>Balancing & Blueprinting - Precision engine work</span>
                        </li>
                    </ul>
                    <a href="https://wa.me/6287862164635?text=Halo, saya ingin konsultasi tentang layanan Engine" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 inline-block">
                        <i class="fab fa-whatsapp mr-2"></i>Konsultasi Sekarang
                    </a>
                </div>
            </div>
        </div>

        <!-- Service 3: Wiring -->
        <div class="bg-white rounded-2xl shadow-xl mb-12 overflow-hidden" data-aos="fade-up">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="p-8 md:p-12">
                    <div class="flex items-center mb-6">
                        <div class="bg-yellow-100 text-yellow-600 w-16 h-16 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-bolt text-3xl"></i>
                        </div>
                        <h2 class="text-3xl font-bold text-secondary">Custom Wiring</h2>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Layanan wiring kustom dan electrical system untuk berbagai kebutuhan modifikasi. Dari wire tuck hingga full race harness.
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-yellow-600 mr-3 mt-1"></i>
                            <span>Custom Wiring - Wire harness kustom profesional</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-yellow-600 mr-3 mt-1"></i>
                            <span>ECU Installation - Pemasangan aftermarket ECU</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-yellow-600 mr-3 mt-1"></i>
                            <span>Electrical Diagnostics - Troubleshoot sistem listrik</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-yellow-600 mr-3 mt-1"></i>
                            <span>Sensor Integration - Instalasi sensor tambahan</span>
                        </li>
                    </ul>
                    <a href="https://wa.me/6287862164635?text=Halo, saya ingin konsultasi tentang layanan Wiring" target="_blank" class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-3 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 inline-block">
                        <i class="fab fa-whatsapp mr-2"></i>Konsultasi Sekarang
                    </a>
                </div>
                <div class="h-full">
                    <img src="https://images.unsplash.com/photo-1599420186946-7b6fb4e297f0?w=800" alt="Wiring" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <!-- Service 4: Bore Up -->
        <div class="bg-white rounded-2xl shadow-xl mb-12 overflow-hidden" data-aos="fade-up">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="h-full order-2 md:order-1">
                    <img src="{{ asset('images/boreup.jpg') }}" alt="Bore Up" class="w-full h-full object-cover" loading="lazy" decoding="async">
                </div>
                <div class="p-8 md:p-12 order-1 md:order-2">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-100 text-green-600 w-16 h-16 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-tachometer-alt text-3xl"></i>
                        </div>
                        <h2 class="text-3xl font-bold text-secondary">Bore Up Specialist</h2>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Layanan bore up dari harian hingga racing dengan perhitungan presisi. Upgrade kapasitas mesin untuk performa maksimal.
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>Bore Up Harian - Upgrade untuk penggunaan sehari-hari</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>Bore Up Racing - Full race specification</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>Setting After Bore Up - Tuning dan setup optimal</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                            <span>Dyno Testing - Pengukuran performa actual</span>
                        </li>
                    </ul>
                    <a href="https://wa.me/6287862164635?text=Halo, saya ingin konsultasi tentang layanan Bore Up" target="_blank" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 inline-block">
                        <i class="fab fa-whatsapp mr-2"></i>Konsultasi Sekarang
                    </a>
                </div>
            </div>
        </div>

        <!-- Service 5: Remap ECU -->
        <div class="bg-white rounded-2xl shadow-xl mb-12 overflow-hidden" data-aos="fade-up">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="p-8 md:p-12">
                    <div class="flex items-center mb-6">
                        <div class="bg-purple-100 text-purple-600 w-16 h-16 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-laptop-code text-3xl"></i>
                        </div>
                        <h2 class="text-3xl font-bold text-secondary">ECU Remap & Tuning</h2>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Layanan ECU remapping dan dyno tuning untuk ekstrak performa maksimal dengan tetap menjaga keandalan mesin.
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-purple-600 mr-3 mt-1"></i>
                            <span>ECU Remap - Custom mapping untuk performa optimal</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-purple-600 mr-3 mt-1"></i>
                            <span>Dyno Tuning - Fine tuning dengan dyno test</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-purple-600 mr-3 mt-1"></i>
                            <span>Performance Optimization - Maximize power & torque</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-purple-600 mr-3 mt-1"></i>
                            <span>Data Logging - Monitoring dan analisa performa</span>
                        </li>
                    </ul>
                    <a href="https://wa.me/6287862164635?text=Halo, saya ingin konsultasi tentang layanan ECU Remap" target="_blank" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 inline-block">
                        <i class="fab fa-whatsapp mr-2"></i>Konsultasi Sekarang
                    </a>
                </div>
                <div class="h-full">
                    <img src="{{ asset('images/remap.jpg') }}" alt="ECU Remap" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Price Range Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-secondary mb-4">Estimasi Harga</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Harga dapat bervariasi tergantung tipe kendaraan dan kompleksitas pekerjaan
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all" data-aos="fade-up">
                <div class="text-center mb-6">
                    <div class="text-4xl font-bold text-secondary mb-2">Basic</div>
                    <div class="text-gray-600">Maintenance & Repair</div>
                </div>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Service Rutin</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Tune Up</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>General Repair</span>
                    </li>
                </ul>
                <div class="text-center text-3xl font-bold text-primary mb-4">Rp 500K+</div>
                <a href="https://wa.me/6287862164635" target="_blank" class="block text-center btn-secondary">Konsultasi</a>
            </div>

            <div class="bg-gradient-to-br from-primary to-red-700 p-8 rounded-xl shadow-2xl transform scale-105 text-white" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center mb-6">
                    <div class="bg-white text-primary px-4 py-1 rounded-full inline-block text-sm font-bold mb-4">POPULAR</div>
                    <div class="text-4xl font-bold mb-2">Performance</div>
                    <div class="text-red-100">Tuning & Upgrade</div>
                </div>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-center">
                        <i class="fas fa-check text-white mr-3"></i>
                        <span>Bore Up</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-white mr-3"></i>
                        <span>ECU Remap</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-white mr-3"></i>
                        <span>Dyno Test</span>
                    </li>
                </ul>
                <div class="text-center text-3xl font-bold mb-4">Rp 5Jt+</div>
                <a href="https://wa.me/6287862164635" target="_blank" class="block text-center bg-white text-primary hover:bg-gray-100 font-bold py-3 px-8 rounded-lg transition-all">Konsultasi</a>
            </div>

            <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center mb-6">
                    <div class="text-4xl font-bold text-secondary mb-2">Premium</div>
                    <div class="text-gray-600">Full Build Project</div>
                </div>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Engine Rebuild</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Custom Wiring</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-green-500 mr-3"></i>
                        <span>Complete Setup</span>
                    </li>
                </ul>
                <div class="text-center text-3xl font-bold text-primary mb-4">Rp 20Jt+</div>
                <a href="https://wa.me/6287862164635" target="_blank" class="block text-center btn-secondary">Konsultasi</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-secondary to-gray-900 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-6" data-aos="fade-up">Butuh Konsultasi Lebih Detail?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Tim ahli kami siap membantu Anda menemukan solusi terbaik untuk kendaraan Anda
        </p>
        <a href="https://wa.me/6287862164635" target="_blank" class="btn-primary" data-aos="fade-up" data-aos-delay="200">
            <i class="fab fa-whatsapp mr-2"></i>Chat WhatsApp Sekarang
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
</script>

@endsection
