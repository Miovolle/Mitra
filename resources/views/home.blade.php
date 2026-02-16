@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="hero-section">
    <div class="hero-bg-orbs">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        <div class="orb orb-3"></div>
    </div>
    
    <div class="container">
        <div class="row align-items-center min-vh-100 position-relative">
            <!-- Left Content -->
            <div class="col-lg-6 hero-content" data-aos="fade-right">
                <div class="hero-badge">
                    <i class="bi bi-stars me-2"></i>
                    <span>Selamat Datang</span>
                </div>

                <h1 class="hero-title">
                    Halo, Sahabat 
                    <span class="text-gradient">Juara!</span>
                </h1>

                <p class="hero-description">
                    Platform resmi <strong>Mitra Prestasi</strong>. Temukan informasi lomba 
                    terbaru, panduan lengkap, dan raih prestasimu bersama kami.
                </p>

                <div class="hero-quote-box">
                    <div class="quote-icon">"</div>
                    <p class="hero-quote">Berjuang dalam Belajar Tanpa Batas Waktu!</p>
                </div>

                <div class="hero-cta">
                    <a href="#lomba" class="btn btn-primary btn-lg hero-button">
                        <span>Lihat Lomba</span>
                        <i class="bi bi-arrow-down-circle ms-2"></i>
                    </a>
                    <a href="#profil" class="btn btn-outline-primary btn-lg">
                        <span>Tentang Kami</span>
                    </a>
                </div>

                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Peserta Aktif</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">100+</div>
                        <div class="stat-label">Lomba Tersedia</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Pemenang</div>
                    </div>
                </div>
            </div>

            <!-- Right Content - Mascot -->
            <div class="col-lg-6 text-center hero-mascot" data-aos="fade-left">
                <div class="mascot-container">
                    <div class="mascot-glow"></div>
                    <img src="{{ asset('img/mascot.png') }}" alt="Mitra Prestasi Mascot" class="hero-image">
                    <div class="floating-elements">
                        <div class="float-item trophy">
                            <i class="bi bi-trophy-fill"></i>
                        </div>
                        <div class="float-item star">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="float-item medal">
                            <i class="bi bi-award-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator">
        <div class="mouse">
            <div class="wheel"></div>
        </div>
    </div>
</section>

<!-- FEATURES SECTION -->
<section class="features-section" id="features">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Kenapa Pilih Kami?</span>
            <h2 class="section-title">Keunggulan Mitra Prestasi</h2>
        </div>

        <div class="row g-4 mt-5">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-search"></i>
                    </div>
                    <h3 class="feature-title">Informasi Lengkap</h3>
                    <p class="feature-text">
                        Database kompetisi ter-update dengan detail lengkap mulai dari timeline, 
                        persyaratan, hingga hadiah yang ditawarkan.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card featured">
                    <div class="featured-badge">Popular</div>
                    <div class="feature-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <h3 class="feature-title">Komunitas Aktif</h3>
                    <p class="feature-text">
                        Bergabung dengan ribuan pelajar dan mahasiswa berprestasi 
                        yang saling berbagi tips dan pengalaman.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-award"></i>
                    </div>
                    <h3 class="feature-title">Terpercaya</h3>
                    <p class="feature-text">
                        Platform resmi berbadan hukum dengan track record 
                        penyelenggaraan kompetisi yang profesional.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROFILE SECTION -->
<section class="profil-section" id="profil">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="profil-image-wrapper">
                    <div class="profil-image-bg"></div>
                    <img src="{{ asset('img/founder.png') }}" alt="Founder" class="profil-image">
                    <div class="profil-pattern"></div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <span class="section-subtitle">Tentang Kami</span>
                <h2 class="section-title mb-4">Profil Mitra Prestasi</h2>

                <p class="profil-text">
                    Mitra Prestasi merupakan platform penyelenggara kompetisi edukatif 
                    yang berkomitmen untuk mendukung generasi muda Indonesia dalam 
                    mengembangkan potensi dan meraih prestasi terbaiknya.
                </p>

                <p class="profil-text">
                    Kami percaya bahwa setiap individu memiliki bakat unik yang perlu 
                    diasah melalui kompetisi yang berkualitas dan berstandar tinggi.
                </p>

                <div class="legal-card">
                    <div class="legal-icon-wrapper">
                        <i class="bi bi-file-earmark-text-fill"></i>
                    </div>
                    <div class="legal-content">
                        <div class="legal-label">Nomor Legalitas</div>
                        <div class="legal-number">AHU-0002273.AH.01.04 Tahun 2026</div>
                    </div>
                    <div class="verified-badge">
                        <i class="bi bi-patch-check-fill"></i>
                    </div>
                </div>

                <div class="profil-mission">
                    <h4>Visi & Misi</h4>
                    <ul>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Menjadi platform kompetisi edukatif terdepan di Indonesia</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Memfasilitasi generasi muda untuk berkembang dan berprestasi</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Menciptakan ekosistem kompetisi yang fair dan transparan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIAL SECTION -->
<section class="testimonial-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Testimoni</span>
            <h2 class="section-title">Apa Kata Mereka?</h2>
        </div>

        <div class="row g-4 mt-5">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">
                        "Platform yang sangat membantu! Saya berhasil menemukan banyak 
                        lomba sesuai minat saya dan akhirnya juara 1!"
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="{{ asset('img/avatar1.png') }}" alt="Student">
                        </div>
                        <div>
                            <div class="author-name">Andi Pratama</div>
                            <div class="author-title">Mahasiswa UI</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">
                        "Informasinya lengkap dan selalu update. Tim support juga 
                        responsif banget kalau ada pertanyaan."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="{{ asset('img/avatar2.png') }}" alt="Student">
                        </div>
                        <div>
                            <div class="author-name">Siti Nurhaliza</div>
                            <div class="author-title">Siswa SMAN 1 Jakarta</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">
                        "Lomba-lombanya berkualitas dan kredibel. Recommended untuk 
                        yang mau mengasah kemampuan!"
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="{{ asset('img/avatar3.png') }}" alt="Student">
                        </div>
                        <div>
                            <div class="author-name">Budi Santoso</div>
                            <div class="author-title">Mahasiswa ITB</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container">
        <div class="cta-card" data-aos="zoom-in">
            <div class="cta-content">
                <h2 class="cta-title">Siap Raih Prestasi?</h2>
                <p class="cta-text">
                    Bergabunglah dengan ribuan pelajar dan mahasiswa yang sudah 
                    mempercayai Mitra Prestasi sebagai partner menuju kesuksesan!
                </p>
                <div class="cta-buttons">
                    <a href="#" class="btn btn-light btn-lg">
                        <i class="bi bi-rocket-takeoff me-2"></i>
                        Mulai Sekarang
                    </a>
                    <a href="#kontak" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-chat-dots me-2"></i>
                        Hubungi Kami
                    </a>
                </div>
            </div>
            <div class="cta-illustration">
                <i class="bi bi-trophy-fill"></i>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="kontak-section" id="kontak">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="section-subtitle">Get In Touch</span>
                <h2 class="section-title mb-4">Kontak Kami</h2>
                <p class="kontak-description">
                    Punya pertanyaan atau ingin berkolaborasi? Jangan ragu untuk 
                    menghubungi kami. Tim kami siap membantu Anda!
                </p>

                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="contact-detail">
                            <div class="contact-label">Alamat</div>
                            <div class="contact-value">Jl. Sriwijaya V blok F No.18, Jember</div>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div class="contact-detail">
                            <div class="contact-label">Email</div>
                            <div class="contact-value">info@mitraprestasi.com</div>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="contact-detail">
                            <div class="contact-label">Telepon</div>
                            <div class="contact-value">+62 812-3456-7890</div>
                        </div>
                    </div>
                </div>

                <div class="social-links">
                    <a href="#" class="social-link whatsapp">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                    <a href="#" class="social-link instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="social-link youtube">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="#" class="social-link email">
                        <i class="bi bi-envelope-fill"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <div class="contact-form-wrapper">
                    <form class="contact-form">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="nama@email.com">
                        </div>

                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" class="form-control" id="subject" placeholder="Topik pesan Anda">
                        </div>

                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg w-100">
                            <i class="bi bi-send-fill me-2"></i>
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="footer-brand">
                    <img src="{{ asset('img/logo.png') }}" alt="Mitra Prestasi" class="footer-logo">
                    <h3>Mitra Prestasi</h3>
                </div>
                <p class="footer-description">
                    Platform kompetisi edukatif terpercaya untuk generasi muda Indonesia 
                    yang ingin mengembangkan potensi dan meraih prestasi.
                </p>
            </div>

            <div class="col-lg-2 col-md-4">
                <h4 class="footer-title">Menu</h4>
                <ul class="footer-links">
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#lomba">Lomba</a></li>
                    <li><a href="#profil">Profil</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4">
                <h4 class="footer-title">Kategori Lomba</h4>
                <ul class="footer-links">
                    <li><a href="#">Akademik</a></li>
                    <li><a href="#">Seni & Budaya</a></li>
                    <li><a href="#">Olahraga</a></li>
                    <li><a href="#">Teknologi</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4">
                <h4 class="footer-title">Newsletter</h4>
                <p class="footer-newsletter-text">
                    Dapatkan info lomba terbaru langsung ke email Anda!
                </p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Email Anda" class="form-control">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-send-fill"></i>
                    </button>
                </form>
            </div>
        </div>

        <hr class="footer-divider">

        <div class="footer-bottom">
            <p class="copyright">
                © 2026 Mitra Prestasi. All Rights Reserved.
            </p>
            <div class="footer-legal">
                <a href="#">Privacy Policy</a>
                <span>•</span>
                <a href="#">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

@endsection

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
@endpush

@push('scripts')
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Parallax effect for mascot
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const mascot = document.querySelector('.hero-mascot');
        if (mascot) {
            mascot.style.transform = `translateY(${scrolled * 0.3}px)`;
        }
    });
</script>
@endpush