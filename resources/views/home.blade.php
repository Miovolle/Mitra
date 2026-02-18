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
                    <img src="{{ asset('image\WhatsApp_Image_2026-02-16_at_14.55.36-removebg-preview.png') }}" alt="Mitra Prestasi Mascot" class="hero-image">
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

<!-- STATISTICS TABLE SECTION -->
<section class="stats-table-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="section-subtitle">Pencapaian Kami</span>
                <h2 class="section-title mb-4">Data & Statistik Mitra Prestasi</h2>
                <p class="stats-description">
                    Bergabunglah dengan ribuan peserta yang telah meraih prestasi melalui 
                    platform kami. Lihat data pencapaian dan pertumbuhan komunitas kami.
                </p>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="stats-table-wrapper">
                    <table class="stats-table">
                        <thead>
                            <tr>
                                <th>Kategori</th>
                                <th>Total</th>
                                <th>Growth</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="table-category">
                                        <i class="bi bi-people-fill"></i>
                                        <span>Total Peserta</span>
                                    </div>
                                </td>
                                <td><strong>2,847</strong></td>
                                <td>
                                    <span class="growth-badge positive">
                                        <i class="bi bi-arrow-up"></i> 24%
                                    </span>
                                </td>
                                <td><span class="status-dot active"></span> Aktif</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-category">
                                        <i class="bi bi-trophy-fill"></i>
                                        <span>Lomba Terselenggara</span>
                                    </div>
                                </td>
                                <td><strong>156</strong></td>
                                <td>
                                    <span class="growth-badge positive">
                                        <i class="bi bi-arrow-up"></i> 18%
                                    </span>
                                </td>
                                <td><span class="status-dot active"></span> Aktif</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-category">
                                        <i class="bi bi-award-fill"></i>
                                        <span>Total Pemenang</span>
                                    </div>
                                </td>
                                <td><strong>468</strong></td>
                                <td>
                                    <span class="growth-badge positive">
                                        <i class="bi bi-arrow-up"></i> 32%
                                    </span>
                                </td>
                                <td><span class="status-dot active"></span> Aktif</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-category">
                                        <i class="bi bi-cash-stack"></i>
                                        <span>Total Hadiah (Juta)</span>
                                    </div>
                                </td>
                                <td><strong>Rp 850</strong></td>
                                <td>
                                    <span class="growth-badge positive">
                                        <i class="bi bi-arrow-up"></i> 45%
                                    </span>
                                </td>
                                <td><span class="status-dot active"></span> Aktif</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-category">
                                        <i class="bi bi-building"></i>
                                        <span>Partner Institusi</span>
                                    </div>
                                </td>
                                <td><strong>34</strong></td>
                                <td>
                                    <span class="growth-badge positive">
                                        <i class="bi bi-arrow-up"></i> 15%
                                    </span>
                                </td>
                                <td><span class="status-dot active"></span> Aktif</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PARTNERS/LIBRARY SECTION -->
<section class="partners-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Partner Kami</span>
            <h2 class="section-title">Dipercaya Oleh Institusi Terkemuka</h2>
            <p class="section-description">
                Bekerja sama dengan universitas, sekolah, dan organisasi terbaik di Indonesia
            </p>
        </div>

        <div class="partners-grid" data-aos="fade-up" data-aos-delay="200">
            <div class="partner-card">
                <div class="partner-logo">
                    <i class="bi bi-mortarboard-fill"></i>
                </div>
                <h4>Universitas Indonesia</h4>
            </div>
            <div class="partner-card">
                <div class="partner-logo">
                    <i class="bi bi-book-fill"></i>
                </div>
                <h4>Institut Teknologi Bandung</h4>
            </div>
            <div class="partner-card">
                <div class="partner-logo">
                    <i class="bi bi-building"></i>
                </div>
                <h4>Universitas Gadjah Mada</h4>
            </div>
            <div class="partner-card">
                <div class="partner-logo">
                    <i class="bi bi-bank"></i>
                </div>
                <h4>Institut Teknologi Sepuluh Nopember</h4>
            </div>
            <div class="partner-card">
                <div class="partner-logo">
                    <i class="bi bi-award-fill"></i>
                </div>
                <h4>Universitas Airlangga</h4>
            </div>
            <div class="partner-card">
                <div class="partner-logo">
                    <i class="bi bi-star-fill"></i>
                </div>
                <h4>Universitas Brawijaya</h4>
            </div>
        </div>
    </div>
</section>

<!-- GALLERY DOCUMENTATION SECTION -->
<section class="gallery-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Dokumentasi</span>
            <h2 class="section-title">Galeri Kegiatan Kami</h2>
            <p class="section-description">
                Momen-momen berharga dari berbagai kompetisi dan kegiatan yang telah kami selenggarakan
            </p>
        </div>

        <!-- Gallery Carousel -->
        <div class="gallery-carousel-wrapper" data-aos="fade-up" data-aos-delay="200">
            <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="2"></button>
                </div>
                
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="gallery-card">
                                    <div class="gallery-image">
                                        <img src="{{ asset('image\WhatsApp Image 2026-02-14 at 13.41.11 (1).jpeg') }}" alt="Kompetisi 1">
                                        <div class="gallery-overlay">
                                            <i class="bi bi-zoom-in"></i>
                                        </div>
                                    </div>
                                    <div class="gallery-info">
                                        <h4>National Coding Challenge</h4>
                                        <p><i class="bi bi-calendar3 me-2"></i>Januari 2026</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-card">
                                    <div class="gallery-image">
                                        <img src="{{ asset('image\WhatsApp Image 2026-02-14 at 13.41.11 (2).jpeg') }}" alt="Pemenang">
                                        <div class="gallery-overlay">
                                            <i class="bi bi-zoom-in"></i>
                                        </div>
                                    </div>
                                    <div class="gallery-info">
                                        <h4>Workshop UI/UX Design</h4>
                                        <p><i class="bi bi-calendar3 me-2"></i>Desember 2025</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-card">
                                    <div class="gallery-image">
                                        <img src="{{ asset('image\WhatsApp Image 2026-02-14 at 13.41.11.jpeg') }}" alt="Pemenang 1">
                                        <div class="gallery-overlay">
                                            <i class="bi bi-zoom-in"></i>
                                        </div>
                                    </div>
                                    <div class="gallery-info">
                                        <h4>Penyerahan Hadiah Juara</h4>
                                        <p><i class="bi bi-calendar3 me-2"></i>November 2025</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="gallery-card">
                                    <div class="gallery-image">
                                        <img src="{{ asset('img/gallery/competition2.jpg') }}" alt="Kompetisi 2">
                                        <div class="gallery-overlay">
                                            <i class="bi bi-zoom-in"></i>
                                        </div>
                                    </div>
                                    <div class="gallery-info">
                                        <h4>Science Olympiad 2025</h4>
                                        <p><i class="bi bi-calendar3 me-2"></i>Oktober 2025</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-card">
                                    <div class="gallery-image">
                                        <img src="{{ asset('img/gallery/seminar1.jpg') }}" alt="Seminar 1">
                                        <div class="gallery-overlay">
                                            <i class="bi bi-zoom-in"></i>
                                        </div>
                                    </div>
                                    <div class="gallery-info">
                                        <h4>Seminar Kewirausahaan</h4>
                                        <p><i class="bi bi-calendar3 me-2"></i>September 2025</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-card">
                                    <div class="gallery-image">
                                        <img src="{{ asset('img/gallery/team1.jpg') }}" alt="Team 1">
                                        <div class="gallery-overlay">
                                            <i class="bi bi-zoom-in"></i>
                                        </div>
                                    </div>
                                    <div class="gallery-info">
                                        <h4>Tim Panitia Kompetisi</h4>
                                        <p><i class="bi bi-calendar3 me-2"></i>Agustus 2025</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="gallery-card">
                                    <div class="gallery-image">
                                        <img src="{{ asset('img/gallery/event1.jpg') }}" alt="Event 1">
                                        <div class="gallery-overlay">
                                            <i class="bi bi-zoom-in"></i>
                                        </div>
                                    </div>
                                    <div class="gallery-info">
                                        <h4>Opening Ceremony</h4>
                                        <p><i class="bi bi-calendar3 me-2"></i>Juli 2025</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-card">
                                    <div class="gallery-image">
                                        <img src="{{ asset('img/gallery/training1.jpg') }}" alt="Training 1">
                                        <div class="gallery-overlay">
                                            <i class="bi bi-zoom-in"></i>
                                        </div>
                                    </div>
                                    <div class="gallery-info">
                                        <h4>Bootcamp Programming</h4>
                                        <p><i class="bi bi-calendar3 me-2"></i>Juni 2025</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-card">
                                    <div class="gallery-image">
                                        <img src="{{ asset('image\WhatsApp Image 2026-02-16 at 14.55.36 (2).jpeg') }}" alt="Partnership 1">
                                        <div class="gallery-overlay">
                                            <i class="bi bi-zoom-in"></i>
                                        </div>
                                    </div>
                                    <div class="gallery-info">
                                        <h4>MOU dengan Universitas</h4>
                                        <p><i class="bi bi-calendar3 me-2"></i>Mei 2025</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                    <span class="carousel-control-icon"><i class="bi bi-chevron-left"></i></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                    <span class="carousel-control-icon"><i class="bi bi-chevron-right"></i></span>
                </button>
            </div>
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="#" class="btn btn-primary btn-lg">
                <i class="bi bi-images me-2"></i>
                Lihat Semua Foto
            </a>
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
                        Bergabung dengan ribuan pelajar berprestasi 
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

<!-- COMPETITION LISTING SECTION -->
<section class="competition-section" id="lomba">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Lomba Terbaru</span>
            <h2 class="section-title">Daftar Kompetisi</h2>
            <p class="section-description">Pilih kompetisi yang sesuai dengan minat dan bakatmu.</p>
        </div>

        <!-- Filter Tabs -->
        <div class="competition-filters" data-aos="fade-up" data-aos-delay="100">
            <button class="filter-btn active" data-filter="all">
                <i class="bi bi-grid-3x3-gap-fill me-2"></i>
                Semua
            </button>
            <button class="filter-btn" data-filter="open">
                <i class="bi bi-unlock-fill me-2"></i>
                Terbuka
            </button>
            <button class="filter-btn" data-filter="closed">
                <i class="bi bi-lock-fill me-2"></i>
                Ditutup
            </button>
            <button class="filter-btn" data-filter="coming">
                <i class="bi bi-clock-fill me-2"></i>
                Segera
            </button>
        </div>

        <!-- Competition Grid -->
        <div class="row g-4 mt-4" id="competitionGrid">
            <!-- Competition Card 1 -->
            <div class="col-lg-4 col-md-6 competition-item" data-status="closed" data-aos="fade-up" data-aos-delay="100">
                <div class="competition-card">
                    <div class="competition-header">
                        <div class="competition-pattern"></div>
                        <h3 class="competition-brand">DHARAKA YUDHA<br>COMPETITION</h3>
                    </div>
                    <div class="competition-body">
                        <h4 class="competition-title">DHARAKA YUDHA COMPETITION 2026 - PORTAL DATA TERINTEGRASI PROBOLINGGO</h4>
                        <p class="competition-category">
                            <i class="bi bi-tag-fill me-2"></i>
                            PENYISIHAN DYC WIL. Probolinggo
                        </p>
                        <div class="competition-meta">
                            <div class="meta-item">
                                <i class="bi bi-calendar-event"></i>
                                <span>15 Jan - 30 Jan 2026</span>
                            </div>
                            <div class="meta-item">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span>Probolinggo</span>
                            </div>
                        </div>
                        <div class="competition-footer">
                            <div class="status-badge status-closed">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                TERBUKA
                            </div>
                            <a href="#" class="btn-detail">
                                Detail
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Competition Card 2 -->
            <div class="col-lg-4 col-md-6 competition-item" data-status="closed" data-aos="fade-up" data-aos-delay="200">
                <div class="competition-card">
                    <div class="competition-header">
                        <div class="competition-pattern"></div>
                        <h3 class="competition-brand">DHARAKA YUDHA<br>COMPETITION</h3>
                    </div>
                    <div class="competition-body">
                        <h4 class="competition-title">DHARAKA YUDHA COMPETITION 2026 - PORTAL DATA TERINTEGRASI SITUBONDO</h4>
                        <p class="competition-category">
                            <i class="bi bi-tag-fill me-2"></i>
                            PENYISIHAN DYC WIL. Situbondo
                        </p>
                        <div class="competition-meta">
                            <div class="meta-item">
                                <i class="bi bi-calendar-event"></i>
                                <span>15 Jan - 30 Jan 2026</span>
                            </div>
                            <div class="meta-item">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span>Situbondo</span>
                            </div>
                        </div>
                        <div class="competition-footer">
                            <div class="status-badge status-closed">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                TERBUKA
                            </div>
                            <a href="#" class="btn-detail">
                                Detail
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Competition Card 3 -->
            <div class="col-lg-4 col-md-6 competition-item" data-status="closed" data-aos="fade-up" data-aos-delay="300">
                <div class="competition-card">
                    <div class="competition-header">
                        <div class="competition-pattern"></div>
                        <h3 class="competition-brand">DHARAKA YUDHA<br>COMPETITION</h3>
                    </div>
                    <div class="competition-body">
                        <h4 class="competition-title">DHARAKA YUDHA COMPETITION 2026 - PORTAL DATA TERINTEGRASI GENTENG</h4>
                        <p class="competition-category">
                            <i class="bi bi-tag-fill me-2"></i>
                            PENYISIHAN DYC WIL. Genteng
                        </p>
                        <div class="competition-meta">
                            <div class="meta-item">
                                <i class="bi bi-calendar-event"></i>
                                <span>15 Jan - 30 Jan 2026</span>
                            </div>
                            <div class="meta-item">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span>Genteng</span>
                            </div>
                        </div>
                        <div class="competition-footer">
                            <div class="status-badge status-closed">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                TERBUKA
                            </div>
                            <a href="#" class="btn-detail">
                                Detail
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Competition Card 4 - Open -->
            <div class="col-lg-4 col-md-6 competition-item" data-status="open" data-aos="fade-up" data-aos-delay="100">
                <div class="competition-card">
                    <div class="competition-header">
                        <div class="competition-pattern"></div>
                        <h3 class="competition-brand">NATIONAL<br>CODING CHALLENGE</h3>
                    </div>
                    <div class="competition-body">
                        <h4 class="competition-title">NATIONAL CODING CHALLENGE 2026 - TINGKAT NASIONAL</h4>
                        <p class="competition-category">
                            <i class="bi bi-tag-fill me-2"></i>
                            Kompetisi Programming
                        </p>
                        <div class="competition-meta">
                            <div class="meta-item">
                                <i class="bi bi-calendar-event"></i>
                                <span>01 Feb - 15 Mar 2026</span>
                            </div>
                            <div class="meta-item">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span>Online</span>
                            </div>
                        </div>
                        <div class="competition-footer">
                            <div class="status-badge status-open">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                TERBUKA
                            </div>
                            <a href="#" class="btn-detail">
                                Detail
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Competition Card 5 - Coming Soon -->
            <div class="col-lg-4 col-md-6 competition-item" data-status="coming" data-aos="fade-up" data-aos-delay="200">
                <div class="competition-card">
                    <div class="competition-header">
                        <div class="competition-pattern"></div>
                        <h3 class="competition-brand">SCIENCE<br>OLYMPIAD</h3>
                    </div>
                    <div class="competition-body">
                        <h4 class="competition-title">OLIMPIADE SAINS NASIONAL 2026</h4>
                        <p class="competition-category">
                            <i class="bi bi-tag-fill me-2"></i>
                            Matematika, Fisika, Bahasa Inggris
                        </p>
                        <div class="competition-meta">
                            <div class="meta-item">
                                <i class="bi bi-calendar-event"></i>
                                <span>01 Mar - 30 Apr 2026</span>
                            </div>
                            <div class="meta-item">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span>Jakarta</span>
                            </div>
                        </div>
                        <div class="competition-footer">
                            <div class="status-badge status-coming">
                                <i class="bi bi-clock-fill me-2"></i>
                                SEGERA
                            </div>
                            <a href="#" class="btn-detail">
                                Detail
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Competition Card 6 - Open -->
            <div class="col-lg-4 col-md-6 competition-item" data-status="open" data-aos="fade-up" data-aos-delay="300">
                <div class="competition-card">
                    <div class="competition-header">
                        <div class="competition-pattern"></div>
                        <h3 class="competition-brand">CREATIVE<br>DESIGN CONTEST</h3>
                    </div>
                    <div class="competition-body">
                        <h4 class="competition-title">LOMBA DESAIN GRAFIS NASIONAL 2026</h4>
                        <p class="competition-category">
                            <i class="bi bi-tag-fill me-2"></i>
                            UI/UX Design & Graphic Design
                        </p>
                        <div class="competition-meta">
                            <div class="meta-item">
                                <i class="bi bi-calendar-event"></i>
                                <span>10 Feb - 20 Mar 2026</span>
                            </div>
                            <div class="meta-item">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span>Online</span>
                            </div>
                        </div>
                        <div class="competition-footer">
                            <div class="status-badge status-open">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                TERBUKA
                            </div>
                            <a href="#" class="btn-detail">
                                Detail
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="#" class="btn btn-primary btn-lg">
                <i class="bi bi-plus-circle me-2"></i>
                Lihat Lebih Banyak
            </a>
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

<!-- BLOG/ARTIKEL SECTION -->
<section class="blog-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Tips & Artikel</span>
            <h2 class="section-title">Blog Mitra Prestasi</h2>
            <p class="section-description">
                Tips, trik, dan panduan untuk membantu kamu sukses dalam kompetisi
            </p>
        </div>

        <div class="row g-4 mt-5">
            <!-- Blog Card 1 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <article class="blog-card">
                    <div class="blog-image">
                        <img src="{{ asset('img/blog/tips-lomba.jpg') }}" alt="Tips Lomba">
                        <div class="blog-category">Tips & Trik</div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="bi bi-calendar3 me-1"></i> 15 Feb 2026</span>
                            <span><i class="bi bi-eye me-1"></i> 1.2k views</span>
                        </div>
                        <h3 class="blog-title">
                            <a href="#">7 Tips Jitu Memenangkan Kompetisi untuk Pemula</a>
                        </h3>
                        <p class="blog-excerpt">
                            Ingin ikut lomba tapi bingung mulai dari mana? Simak 7 tips jitu 
                            yang akan membantumu meraih kemenangan...
                        </p>
                        <a href="#" class="blog-read-more">
                            Baca Selengkapnya
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Blog Card 2 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <article class="blog-card featured-post">
                    <div class="blog-image">
                        <img src="{{ asset('img/blog/persiapan.jpg') }}" alt="Persiapan Kompetisi">
                        <div class="blog-category">Panduan</div>
                        <div class="featured-badge">
                            <i class="bi bi-star-fill"></i> Featured
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="bi bi-calendar3 me-1"></i> 12 Feb 2026</span>
                            <span><i class="bi bi-eye me-1"></i> 2.5k views</span>
                        </div>
                        <h3 class="blog-title">
                            <a href="#">Persiapan Matang: Kunci Sukses di Kompetisi Nasional</a>
                        </h3>
                        <p class="blog-excerpt">
                            Persiapan yang matang adalah kunci kesuksesan. Pelajari langkah-langkah 
                            strategis untuk menghadapi kompetisi...
                        </p>
                        <a href="#" class="blog-read-more">
                            Baca Selengkapnya
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Blog Card 3 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <article class="blog-card">
                    <div class="blog-image">
                        <img src="{{ asset('img/blog/success-story.jpg') }}" alt="Success Story">
                        <div class="blog-category">Success Story</div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="bi bi-calendar3 me-1"></i> 10 Feb 2026</span>
                            <span><i class="bi bi-eye me-1"></i> 890 views</span>
                        </div>
                        <h3 class="blog-title">
                            <a href="#">Dari Nol hingga Juara: Kisah Inspiratif Andi</a>
                        </h3>
                        <p class="blog-excerpt">
                            Andi berhasil meraih juara 1 di kompetisi coding nasional. 
                            Simak perjalanan inspiratifnya...
                        </p>
                        <a href="#" class="blog-read-more">
                            Baca Selengkapnya
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </article>
            </div>
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="#" class="btn btn-primary btn-lg">
                <i class="bi bi-journal-text me-2"></i>
                Lihat Semua Artikel
            </a>
        </div>
    </div>
</section>

<!-- TRAINING/WORKSHOP SECTION -->
<section class="training-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Pelatihan</span>
            <h2 class="section-title">Workshop & Pelatihan</h2>
            <p class="section-description">
                Tingkatkan skill dengan mengikuti workshop dan pelatihan yang kami sediakan
            </p>
        </div>

        <div class="row g-4 mt-5">
            <!-- Training Card 1 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="training-card">
                    <div class="training-header">
                        <div class="training-icon">
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <div class="training-badge upcoming">Segera Dibuka</div>
                    </div>
                    <div class="training-content">
                        <h3 class="training-title">Bootcamp Web Development</h3>
                        <p class="training-description">
                            Pelajari fundamental web development dari nol hingga mahir. 
                            Cocok untuk pemula yang ingin terjun ke dunia programming.
                        </p>
                        <div class="training-details">
                            <div class="detail-item">
                                <i class="bi bi-calendar-check"></i>
                                <div>
                                    <span class="detail-label">Tanggal</span>
                                    <span class="detail-value">1 - 15 Maret 2026</span>
                                </div>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-clock"></i>
                                <div>
                                    <span class="detail-label">Durasi</span>
                                    <span class="detail-value">30 Jam (10 Sesi)</span>
                                </div>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-people"></i>
                                <div>
                                    <span class="detail-label">Kuota</span>
                                    <span class="detail-value">50 Peserta</span>
                                </div>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-cash-coin"></i>
                                <div>
                                    <span class="detail-label">Harga</span>
                                    <span class="detail-value">Rp 500.000</span>
                                </div>
                            </div>
                        </div>
                        <div class="training-features">
                            <span class="feature-tag"><i class="bi bi-check-circle-fill me-1"></i> Sertifikat</span>
                            <span class="feature-tag"><i class="bi bi-check-circle-fill me-1"></i> Mentoring</span>
                            <span class="feature-tag"><i class="bi bi-check-circle-fill me-1"></i> Project</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-block">
                            <i class="bi bi-box-arrow-in-right me-2"></i>
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>

            <!-- Training Card 2 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="training-card">
                    <div class="training-header">
                        <div class="training-icon purple">
                            <i class="bi bi-palette"></i>
                        </div>
                        <div class="training-badge open">Pendaftaran Dibuka</div>
                    </div>
                    <div class="training-content">
                        <h3 class="training-title">Workshop UI/UX Design</h3>
                        <p class="training-description">
                            Kuasai prinsip design thinking dan tools profesional untuk 
                            menciptakan user experience yang luar biasa.
                        </p>
                        <div class="training-details">
                            <div class="detail-item">
                                <i class="bi bi-calendar-check"></i>
                                <div>
                                    <span class="detail-label">Tanggal</span>
                                    <span class="detail-value">20 - 27 Februari 2026</span>
                                </div>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-clock"></i>
                                <div>
                                    <span class="detail-label">Durasi</span>
                                    <span class="detail-value">20 Jam (8 Sesi)</span>
                                </div>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-people"></i>
                                <div>
                                    <span class="detail-label">Kuota</span>
                                    <span class="detail-value">30 Peserta</span>
                                </div>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-cash-coin"></i>
                                <div>
                                    <span class="detail-label">Harga</span>
                                    <span class="detail-value">Rp 450.000</span>
                                </div>
                            </div>
                        </div>
                        <div class="training-features">
                            <span class="feature-tag"><i class="bi bi-check-circle-fill me-1"></i> Sertifikat</span>
                            <span class="feature-tag"><i class="bi bi-check-circle-fill me-1"></i> Portfolio</span>
                            <span class="feature-tag"><i class="bi bi-check-circle-fill me-1"></i> Tools</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-block">
                            <i class="bi bi-box-arrow-in-right me-2"></i>
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>

            <!-- Training Card 3 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="training-card">
                    <div class="training-header">
                        <div class="training-icon green">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <div class="training-badge open">Pendaftaran Dibuka</div>
                    </div>
                    <div class="training-content">
                        <h3 class="training-title">Digital Marketing Strategy</h3>
                        <p class="training-description">
                            Pelajari strategi marketing digital terkini dari SEO, Social Media, 
                            hingga Google Ads untuk bisnis modern.
                        </p>
                        <div class="training-details">
                            <div class="detail-item">
                                <i class="bi bi-calendar-check"></i>
                                <div>
                                    <span class="detail-label">Tanggal</span>
                                    <span class="detail-value">5 - 12 Maret 2026</span>
                                </div>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-clock"></i>
                                <div>
                                    <span class="detail-label">Durasi</span>
                                    <span class="detail-value">16 Jam (8 Sesi)</span>
                                </div>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-people"></i>
                                <div>
                                    <span class="detail-label">Kuota</span>
                                    <span class="detail-value">40 Peserta</span>
                                </div>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-cash-coin"></i>
                                <div>
                                    <span class="detail-label">Harga</span>
                                    <span class="detail-value">Rp 400.000</span>
                                </div>
                            </div>
                        </div>
                        <div class="training-features">
                            <span class="feature-tag"><i class="bi bi-check-circle-fill me-1"></i> Sertifikat</span>
                            <span class="feature-tag"><i class="bi bi-check-circle-fill me-1"></i> Case Study</span>
                            <span class="feature-tag"><i class="bi bi-check-circle-fill me-1"></i> Template</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-block">
                            <i class="bi bi-box-arrow-in-right me-2"></i>
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>

            <!-- Training Card 4 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="training-card">
                    <div class="training-header">
                        <div class="training-icon orange">
                            <i class="bi bi-megaphone"></i>
                        </div>
                        <div class="training-badge upcoming">Segera Dibuka</div>
                    </div>
                    <div class="training-content">
                        <h3 class="training-title">Public Speaking & Presentation</h3>
                        <p class="training-description">
                            Tingkatkan kemampuan berbicara di depan umum dan buat presentasi 
                            yang memukau audiens dengan percaya diri.
                        </p>
                        <div class="training-details">
                            <div class="detail-item">
                                <i class="bi bi-calendar-check"></i>
                                <div>
                                    <span class="detail-label">Tanggal</span>
                                    <span class="detail-value">10 - 17 Maret 2026</span>
                                </div>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-clock"></i>
                                <div>
                                    <span class="detail-label">Durasi</span>
                                    <span class="detail-value">12 Jam (6 Sesi)</span>
                                </div>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-people"></i>
                                <div>
                                    <span class="detail-label">Kuota</span>
                                    <span class="detail-value">25 Peserta</span>
                                </div>
                            </div>
                            <div class="detail-item">
                                <i class="bi bi-cash-coin"></i>
                                <div>
                                    <span class="detail-label">Harga</span>
                                    <span class="detail-value">Rp 350.000</span>
                                </div>
                            </div>
                        </div>
                        <div class="training-features">
                            <span class="feature-tag"><i class="bi bi-check-circle-fill me-1"></i> Sertifikat</span>
                            <span class="feature-tag"><i class="bi bi-check-circle-fill me-1"></i> Praktek</span>
                            <span class="feature-tag"><i class="bi bi-check-circle-fill me-1"></i> Feedback</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-block">
                            <i class="bi bi-box-arrow-in-right me-2"></i>
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="#" class="btn btn-primary btn-lg">
                <i class="bi bi-calendar-plus me-2"></i>
                Lihat Jadwal Lengkap
            </a>
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

<!-- TIMELINE SECTION -->
<section class="timeline-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Perjalanan Kami</span>
            <h2 class="section-title">Timeline Mitra Prestasi</h2>
            <p class="section-description">
                Melihat kembali perjalanan dan pencapaian kami dari waktu ke waktu
            </p>
        </div>

        <div class="timeline-wrapper">
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-marker">
                    <i class="bi bi-flag-fill"></i>
                </div>
                <div class="timeline-content">
                    <div class="timeline-date">Januari 2024</div>
                    <h4 class="timeline-title">Launching Platform</h4>
                    <p class="timeline-text">
                        Mitra Prestasi resmi diluncurkan sebagai platform kompetisi edukatif 
                        pertama yang terintegrasi untuk pelajar dan mahasiswa Indonesia.
                    </p>
                </div>
            </div>

            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-marker">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="timeline-content">
                    <div class="timeline-date">Maret 2024</div>
                    <h4 class="timeline-title">1000+ Peserta Pertama</h4>
                    <p class="timeline-text">
                        Mencapai milestone 1000 peserta aktif dan menyelenggarakan 
                        10 kompetisi dengan total hadiah Rp 100 juta.
                    </p>
                </div>
            </div>

            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-marker">
                    <i class="bi bi-trophy-fill"></i>
                </div>
                <div class="timeline-content">
                    <div class="timeline-date">Juli 2024</div>
                    <h4 class="timeline-title">Kompetisi Nasional Pertama</h4>
                    <p class="timeline-text">
                        Sukses menyelenggarakan kompetisi nasional pertama dengan 
                        peserta dari 50+ kota di Indonesia.
                    </p>
                </div>
            </div>

            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-marker">
                    <i class="bi bi-award-fill"></i>
                </div>
                <div class="timeline-content">
                    <div class="timeline-date">November 2024</div>
                    <h4 class="timeline-title">Partnership dengan Universitas</h4>
                    <p class="timeline-text">
                        Menjalin kerjasama strategis dengan 20+ universitas terkemuka 
                        untuk menghadirkan kompetisi berkualitas tinggi.
                    </p>
                </div>
            </div>

            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-marker">
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="timeline-content">
                    <div class="timeline-date">Februari 2026</div>
                    <h4 class="timeline-title">2500+ Peserta & 150+ Lomba</h4>
                    <p class="timeline-text">
                        Terus berkembang dengan komunitas yang semakin besar dan 
                        ragam kompetisi yang semakin beragam di berbagai bidang.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section class="faq-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="section-subtitle">Punya Pertanyaan?</span>
                <h2 class="section-title mb-4">Frequently Asked Questions</h2>
                <p class="faq-description">
                    Temukan jawaban untuk pertanyaan yang sering diajukan tentang 
                    Mitra Prestasi dan layanan kami.
                </p>
                <div class="faq-contact-box">
                    <i class="bi bi-chat-dots-fill"></i>
                    <div>
                        <h4>Masih ada pertanyaan?</h4>
                        <p>Hubungi tim support kami</p>
                        <a href="#kontak" class="btn btn-primary btn-sm">
                            Hubungi Kami
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                <i class="bi bi-question-circle-fill me-3"></i>
                                Apa itu Mitra Prestasi?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Mitra Prestasi adalah platform kompetisi edukatif yang menyediakan 
                                informasi lengkap tentang berbagai lomba untuk pelajar dan mahasiswa. 
                                Kami membantu kamu menemukan kompetisi yang sesuai dengan minat dan 
                                bakat, serta memberikan panduan untuk meraih prestasi terbaik.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                <i class="bi bi-question-circle-fill me-3"></i>
                                Bagaimana cara mendaftar lomba?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Kamu bisa browse kompetisi yang tersedia di halaman Lomba, pilih 
                                kompetisi yang menarik, lalu klik tombol "Detail" untuk melihat 
                                informasi lengkap dan link pendaftaran. Setiap kompetisi memiliki 
                                persyaratan dan mekanisme pendaftaran yang berbeda.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                <i class="bi bi-question-circle-fill me-3"></i>
                                Apakah ada biaya untuk bergabung?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Bergabung dengan platform Mitra Prestasi sepenuhnya GRATIS! Kamu 
                                dapat mengakses semua informasi lomba tanpa dipungut biaya. Namun, 
                                beberapa kompetisi mungkin memiliki biaya pendaftaran yang ditentukan 
                                oleh penyelenggara lomba.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                <i class="bi bi-question-circle-fill me-3"></i>
                                Siapa saja yang bisa ikut kompetisi?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Kompetisi kami terbuka untuk pelajar TK, SD, SMP dari 
                                seluruh Indonesia. Setiap kompetisi memiliki kriteria peserta yang 
                                berbeda-beda, jadi pastikan kamu membaca persyaratan dengan teliti 
                                sebelum mendaftar.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                <i class="bi bi-question-circle-fill me-3"></i>
                                Bagaimana cara menjadi partner?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Kami selalu terbuka untuk kerjasama dengan institusi pendidikan, 
                                perusahaan, atau organisasi yang ingin menyelenggarakan kompetisi. 
                                Silakan hubungi tim kami melalui form kontak atau email di 
                                partnership@mitraprestasi.com untuk diskusi lebih lanjut.
                            </div>
                        </div>
                    </div>
                </div>
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
                            <div class="contact-value">Jl. Kalisetail Genteng Banyuwangi</div>
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