@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-r from-secondary to-gray-900 text-white py-20">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h1 class="text-5xl font-bold mb-6">Tentang Nike Tuning<br/><span class="text-primary">N-Performance</span></h1>
                <p class="text-xl text-gray-300 leading-relaxed">
                    Lebih dari sekedar bengkel tuning, kami adalah partner Anda dalam mewujudkan performa maksimal kendaraan dengan standar profesional internasional.
                </p>
            </div>
            <div data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?w=800" alt="Workshop" class="rounded-2xl shadow-2xl">
            </div>
        </div>
    </div>
</section>

<!-- History Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-secondary mb-4">Sejarah Kami</h2>
                <div class="w-20 h-1 bg-primary mx-auto mb-6"></div>
            </div>
            
            <div class="space-y-8">
                <div class="flex gap-6" data-aos="fade-right">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center font-bold text-xl">
                            2014
                        </div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-secondary mb-2">Awal Perjalanan</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Didirikan oleh sekelompok enthusiast otomotif yang memiliki passion tinggi dalam dunia tuning dan modifikasi. Dimulai dari garasi kecil dengan 2 mekanik, melayani kebutuhan dasar tuning kendaraan.
                        </p>
                    </div>
                </div>

                <div class="flex gap-6" data-aos="fade-left">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center font-bold text-xl">
                            2017
                        </div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-secondary mb-2">Ekspansi & Investasi</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Pindah ke workshop yang lebih besar dengan investasi peralatan modern seperti dyno dynamometer, scanner diagnostik profesional, dan mesin presisi CNC untuk porting polish.
                        </p>
                    </div>
                </div>

                <div class="flex gap-6" data-aos="fade-right">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center font-bold text-xl">
                            2020
                        </div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-secondary mb-2">Sertifikasi Internasional</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Tim mekanik kami mendapat sertifikasi internasional dari berbagai brand ternama. Mulai fokus pada ECU remapping dan standalone ECU installation dengan hasil dyno yang terukur.
                        </p>
                    </div>
                </div>

                <div class="flex gap-6" data-aos="fade-left">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center font-bold text-xl">
                            2024
                        </div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-secondary mb-2">Leading Performance Shop</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Telah menangani lebih dari 1000 project dengan tingkat kepuasan customer 98%. Menjadi salah satu bengkel tuning terpercaya dengan tim 15 teknisi profesional dan peralatan terlengkap.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12">
            <div class="bg-white p-8 rounded-2xl shadow-xl" data-aos="fade-right">
                <div class="flex items-center mb-6">
                    <div class="bg-primary text-white w-16 h-16 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-eye text-2xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-secondary">Visi Kami</h2>
                </div>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Menjadi bengkel tuning dan modifikasi kendaraan terdepan di Indonesia dengan standar kualitas internasional, memberikan solusi performa terbaik yang aman, reliable, dan memuaskan setiap customer.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-xl" data-aos="fade-left">
                <div class="flex items-center mb-6">
                    <div class="bg-primary text-white w-16 h-16 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-bullseye text-2xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-secondary">Misi Kami</h2>
                </div>
                <ul class="space-y-3 text-gray-600 text-lg">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary mr-3 mt-1"></i>
                        <span>Memberikan layanan tuning dengan kualitas terbaik</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary mr-3 mt-1"></i>
                        <span>Menggunakan teknologi dan peralatan modern</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary mr-3 mt-1"></i>
                        <span>Mengembangkan kompetensi tim secara berkelanjutan</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary mr-3 mt-1"></i>
                        <span>Membangun kepercayaan jangka panjang dengan customer</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-secondary mb-4">Keunggulan Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Nilai-nilai yang kami pegang teguh dalam setiap pekerjaan
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center p-8 bg-gradient-to-br from-red-50 to-white rounded-xl shadow-lg hover:shadow-2xl transition-all" data-aos="zoom-in">
                <div class="bg-primary text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-user-tie text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary mb-4">Mekanik Berpengalaman</h3>
                <p class="text-gray-600">
                    Tim teknisi dengan pengalaman 10+ tahun dan sertifikasi internasional. Setiap mekanik adalah specialist di bidangnya masing-masing.
                </p>
            </div>

            <div class="text-center p-8 bg-gradient-to-br from-blue-50 to-white rounded-xl shadow-lg hover:shadow-2xl transition-all" data-aos="zoom-in" data-aos-delay="100">
                <div class="bg-blue-600 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-tools text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary mb-4">Peralatan Modern</h3>
                <p class="text-gray-600">
                    Dilengkapi dengan dyno dynamometer, diagnostic scanner, CNC machines, dan tools profesional dari brand ternama dunia.
                </p>
            </div>

            <div class="text-center p-8 bg-gradient-to-br from-green-50 to-white rounded-xl shadow-lg hover:shadow-2xl transition-all" data-aos="zoom-in" data-aos-delay="200">
                <div class="bg-green-600 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-chart-line text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary mb-4">Precision Tuning</h3>
                <p class="text-gray-600">
                    Setiap tuning dilakukan dengan pengukuran dan testing yang akurat. Hasil dyno terukur dan data logging lengkap untuk setiap project.
                </p>
            </div>

            <div class="text-center p-8 bg-gradient-to-br from-yellow-50 to-white rounded-xl shadow-lg hover:shadow-2xl transition-all" data-aos="zoom-in">
                <div class="bg-yellow-600 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-shield-alt text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary mb-4">Garansi Terpercaya</h3>
                <p class="text-gray-600">
                    Kami memberikan garansi untuk semua pekerjaan. Kepuasan dan kepercayaan customer adalah prioritas utama kami.
                </p>
            </div>

            <div class="text-center p-8 bg-gradient-to-br from-purple-50 to-white rounded-xl shadow-lg hover:shadow-2xl transition-all" data-aos="zoom-in" data-aos-delay="100">
                <div class="bg-purple-600 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-comments text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary mb-4">Komunikasi Transparan</h3>
                <p class="text-gray-600">
                    Update progress rutin, konsultasi detail sebelum pengerjaan, dan after sales support yang responsif untuk setiap customer.
                </p>
            </div>

            <div class="text-center p-8 bg-gradient-to-br from-pink-50 to-white rounded-xl shadow-lg hover:shadow-2xl transition-all" data-aos="zoom-in" data-aos-delay="200">
                <div class="bg-pink-600 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-award text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary mb-4">Quality Assurance</h3>
                <p class="text-gray-600">
                    Quality control ketat di setiap tahap pengerjaan. Test drive dan final check sebelum kendaraan diserahkan kepada customer.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-gradient-to-r from-primary to-red-700 text-white">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div data-aos="fade-up">
                <div class="text-5xl font-bold mb-2">10+</div>
                <div class="text-xl">Tahun Pengalaman</div>
            </div>
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="text-5xl font-bold mb-2">200+</div>
                <div class="text-xl">Project Selesai</div>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="text-5xl font-bold mb-2">98%</div>
                <div class="text-xl">Kepuasan Customer</div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300">
                <div class="text-5xl font-bold mb-2">5</div>
                <div class="text-xl">Teknisi Profesional</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-secondary mb-6" data-aos="fade-up">Tertarik Bekerja Sama?</h2>
        <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Mari diskusikan bagaimana kami bisa membantu mewujudkan project impian Anda
        </p>
        <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('contact') }}" class="btn-primary">
                <i class="fas fa-envelope mr-2"></i>Hubungi Kami
            </a>
            <a href="https://wa.me/6287862164635" target="_blank" class="btn-secondary">
                <i class="fab fa-whatsapp mr-2"></i>Chat WhatsApp
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
