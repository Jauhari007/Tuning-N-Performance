@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-r from-secondary to-gray-900 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold mb-4" data-aos="fade-up">Hubungi Kami</h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Kami siap membantu Anda mewujudkan performa maksimal kendaraan Anda
        </p>
    </div>
</section>

<!-- Contact Info Cards -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-6 mb-12">
            <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all" data-aos="fade-up">
                <div class="bg-primary text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-map-marker-alt text-2xl"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">Alamat</h3>
                <p class="text-gray-600 text-sm">Jl. Sawunggaling III No.19, Jemundo<br/>Kec. Taman, Kab. Sidoarjo</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-phone text-2xl"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">Telepon</h3>
                <p class="text-gray-600 text-sm">+62 878-6216-4635<br/>WhatsApp Available</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-green-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fab fa-whatsapp text-2xl"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">WhatsApp</h3>
                <p class="text-gray-600 text-sm">Fast Response<br/>+62 878-6216-4635</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-yellow-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clock text-2xl"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">Jam Operasional</h3>
                <p class="text-gray-600 text-sm">Senin - Sabtu<br/>07:30 - 18:30 WIB</p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-white p-8 rounded-2xl shadow-xl" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-secondary mb-6">Kirim Pesan</h2>
                <form id="contactForm" class="space-y-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Nama Lengkap *</label>
                        <input type="text" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors" placeholder="Masukkan nama Anda">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Email *</label>
                        <input type="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors" placeholder="email@example.com">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">No. WhatsApp *</label>
                        <input type="tel" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors" placeholder="08xx-xxxx-xxxx">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Layanan yang Diinginkan *</label>
                        <select name="service" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                            <option value="">Pilih Layanan</option>
                            <option value="perbaikan">Perbaikan Umum</option>
                            <option value="engine">Engine Rebuild</option>
                            <option value="wiring">Custom Wiring</option>
                            <option value="boreup">Bore Up</option>
                            <option value="ecu">ECU Remap</option>
                            <option value="konsultasi">Konsultasi</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Tipe Kendaraan</label>
                        <input type="text" name="vehicle" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors" placeholder="Contoh: Honda Civic FK8">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Pesan *</label>
                        <textarea name="message" required rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors" placeholder="Jelaskan kebutuhan Anda..."></textarea>
                    </div>

                    <button type="submit" class="w-full btn-primary">
                        <i class="fas fa-paper-plane mr-2"></i>Kirim Pesan
                    </button>
                </form>
            </div>

            <!-- Map & Additional Info -->
            <div class="space-y-6" data-aos="fade-left">
                <!-- Google Maps -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.865710285711!2d112.676492373657!3d-7.368945472516207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e39820a75b33%3A0xb381bad6ea480f50!2sNike%20Tuning%20%26%20Performance!5e0!3m2!1sid!2sid!4v1767039039419!5m2!1sid!2sid" 
                        width="100%" 
                        height="350" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <!-- Quick Contact Buttons -->
                <div class="bg-white p-8 rounded-2xl shadow-xl">
                    <h3 class="text-2xl font-bold text-secondary mb-6">Kontak Cepat</h3>
                    
                    <a href="https://wa.me/6287862164635" target="_blank" class="block bg-green-500 hover:bg-green-600 text-white p-4 rounded-lg mb-4 transition-all transform hover:scale-105">
                        <div class="flex items-center">
                            <i class="fab fa-whatsapp text-3xl mr-4"></i>
                            <div>
                                <div class="font-bold">Chat WhatsApp</div>
                                <div class="text-sm">Fast response & langsung</div>
                            </div>
                        </div>
                    </a>

                    <a href="tel:+6287862164635" class="block bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg mb-4 transition-all transform hover:scale-105">
                        <div class="flex items-center">
                            <i class="fas fa-phone text-3xl mr-4"></i>
                            <div>
                                <div class="font-bold">Telepon Langsung</div>
                                <div class="text-sm">+62 878-6216-4635</div>
                            </div>
                        </div>
                    </a>

                    <a href="mailto:info@niketuning.com" class="block bg-red-500 hover:bg-red-600 text-white p-4 rounded-lg mb-4 transition-all transform hover:scale-105">
                        <div class="flex items-center">
                            <i class="fas fa-envelope text-3xl mr-4"></i>
                            <div>
                                <div class="font-bold">Email</div>
                                <div class="text-sm">info@niketuning.com</div>
                            </div>
                        </div>
                    </a>

                    <a href="https://www.instagram.com/nike_tune?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="block bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white p-4 rounded-lg transition-all transform hover:scale-105">
                        <div class="flex items-center">
                            <i class="fab fa-instagram text-3xl mr-4"></i>
                            <div>
                                <div class="font-bold">Instagram</div>
                                <div class="text-sm">@nike_tune</div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- FAQ Quick Links -->
                <div class="bg-gradient-to-br from-primary to-red-700 text-white p-8 rounded-2xl shadow-xl">
                    <h3 class="text-2xl font-bold mb-4">Pertanyaan Umum</h3>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start">
                            <i class="fas fa-question-circle mr-3 mt-1"></i>
                            <span>Berapa lama waktu pengerjaan bore up?</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-question-circle mr-3 mt-1"></i>
                            <span>Apakah ada garansi untuk pekerjaan?</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-question-circle mr-3 mt-1"></i>
                            <span>Bisa konsultasi gratis dulu?</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-question-circle mr-3 mt-1"></i>
                            <span>Minimal down payment berapa?</span>
                        </li>
                    </ul>
                    <a href="https://wa.me/6287862164635?text=Halo, saya ingin bertanya tentang layanan Nike Tuning" target="_blank" class="block bg-white text-primary hover:bg-gray-100 text-center font-bold py-3 px-6 rounded-lg mt-6 transition-all">
                        Tanya Langsung via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Contact Us -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-secondary mb-4">Mengapa Konsultasi dengan Kami?</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Dapatkan solusi terbaik untuk kebutuhan tuning kendaraan Anda
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center" data-aos="zoom-in">
                <div class="bg-red-100 text-primary w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-comments text-3xl"></i>
                </div>
                <h3 class="font-bold text-xl mb-2">Konsultasi Gratis</h3>
                <p class="text-gray-600">Diskusikan project Anda dengan tim expert kami tanpa biaya apapun</p>
            </div>

            <div class="text-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="bg-blue-100 text-blue-600 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-calculator text-3xl"></i>
                </div>
                <h3 class="font-bold text-xl mb-2">Estimasi Biaya</h3>
                <p class="text-gray-600">Dapatkan estimasi biaya yang transparan dan detail untuk project Anda</p>
            </div>

            <div class="text-center" data-aos="zoom-in" data-aos-delay="200">
                <div class="bg-green-100 text-green-600 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-calendar-check text-3xl"></i>
                </div>
                <h3 class="font-bold text-xl mb-2">Jadwal Fleksibel</h3>
                <p class="text-gray-600">Atur jadwal pengerjaan yang sesuai dengan kebutuhan Anda</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-secondary to-gray-900 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-6" data-aos="fade-up">Siap Memulai Project Anda?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Hubungi kami sekarang dan wujudkan performa maksimal kendaraan impian Anda
        </p>
        <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
            <a href="https://wa.me/6287862164635" target="_blank" class="btn-primary">
                <i class="fab fa-whatsapp mr-2"></i>Chat WhatsApp
            </a>
            <a href="tel:+6287862164635" class="bg-white text-secondary hover:bg-gray-100 font-bold py-4 px-8 rounded-lg transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-phone mr-2"></i>Telepon Sekarang
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

  // Contact Form Handler
  document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const name = formData.get('name');
    const email = formData.get('email');
    const phone = formData.get('phone');
    const service = formData.get('service');
    const vehicle = formData.get('vehicle');
    const message = formData.get('message');
    
    // Create WhatsApp message
    const waMessage = `Halo Nike Tuning,

Nama: ${name}
Email: ${email}
No. WhatsApp: ${phone}
Layanan: ${service}
Tipe Kendaraan: ${vehicle}

Pesan:
${message}`;

    // Open WhatsApp with pre-filled message
    const waUrl = `https://wa.me/6287862164635?text=${encodeURIComponent(waMessage)}`;
    window.open(waUrl, '_blank');
    
    // Reset form
    this.reset();
    
    // Show success message
    alert('Terima kasih! Anda akan diarahkan ke WhatsApp untuk melanjutkan percakapan.');
  });
</script>

@endsection