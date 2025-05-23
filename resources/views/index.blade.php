@extends('layouts.app')

@section('content')
<div class="min-h-screen flex-col">
    <!-- Navigation -->
    <nav class="nav">
        <div class="nav-container">
            <div class="nav-left">
                <div class="logo">
                    <img src="http://mimargelsin.com.tr/assets/img/logo/MimarGelsinCom_B.png" alt="MimarGelsin Logo" class="logo-img">
                </div>
                <div class="nav-menu">
                    <a href="#" class="nav-link">Hakkımızda</a>
                    <a href="#" class="nav-link">Projelerimiz</a>
                    <a href="#" class="nav-link">Blog</a>
                    <a href="#" class="nav-link">Hizmet ver</a>
                    <a href="#" class="nav-link">Teklif Al</a>
                </div>
            </div>
            <div class="nav-right">
                <button class="login-btn">Giriş Yap</button>
                <button class="burger-menu" aria-label="Menu">
                    <i data-lucide="menu"></i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <a href="#" class="mobile-link">Hakkımızda</a>
            <a href="#" class="mobile-link">Projelerimiz</a>
            <a href="#" class="mobile-link">Blog</a>
            <a href="#" class="mobile-link">Hizmet ver</a>
            <a href="#" class="mobile-link">Teklif Al</a>
        </div>
    </nav>

    <!-- Stats Section -->
    <div class="stats-section">
        <div class="stats-container">
            <div class="stat-box">
                <div class="stat-number">2500+</div>
                <div class="stat-description">Tamamlanan Proje</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">800+</div>
                <div class="stat-description">Uzman Mimar</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">1200+</div>
                <div class="stat-description">Mutlu Müşteri</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">15+</div>
                <div class="stat-description">Yıllık Deneyim</div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-container">
            <div class="hero-bg">
                <div class="hero-overlay"></div>
                <img src="https://www.mimargelsin.com.tr/_nuxt/background1.B-BJ9w4P.jpeg" alt="Mimari Plan" class="hero-img active">
                <video id="video1" autoplay loop muted playsinline class="hero-video">
                    <source src="https://v.ftcdn.net/02/78/05/63/700_F_278056308_BhQDLtLvFjducKfEBfccZferOFuMRrGT_ST.mp4" type="video/mp4">
                </video>
                <video id="video2" autoplay loop muted playsinline class="hero-video">
                    <source src="https://v.ftcdn.net/02/78/05/55/700_F_278055565_mrsSn4apGfQCMfEw4p5CSzbG6u4Oc0nE_ST.mp4" type="video/mp4">
                </video>
            </div>

            <div class="register-container">
                <div class="register-form">
                    <h2>Hemen Kayıt Ol</h2>
                    <form id="registerForm">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Ad - Soyad">
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" placeholder="Telefon Numarası">
                        </div>
                        <button type="submit" class="register-btn">Kayıt Ol</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Description Section -->
    <div class="description-section">
        <!-- For Clients -->
        <div class="service-section client-section">
            <div class="service-container">
                <div class="service-image">
                    <img src="https://i.ibb.co/zVRtg8H9/musteri.png" alt="Müşteri">
                </div>
                <div class="service-content">
                    <h2 class="service-title">Mimari Hizmet mi Arıyorsunuz?</h2>
                    <p class="service-description">
                        Projeniz için mükemmel mimarı bulun. İster yeni bir ev, ister renovasyon,
                        ister ticari alan planlıyor olun, platformumuz sizi kalifiye profesyonellerle
                        buluşturuyor.
                    </p>
                    <ul class="service-features">
                        <li>Onaylı Profesyoneller</li>
                        <li>Rekabetçi Teklifler</li>
                        <li>Güvenli İletişim</li>
                    </ul>
                    <div class="cta-container">
                        <button class="cta-button">Teklif Al</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- For Architects -->
        <div class="service-section architect-section">
            <div class="service-container">
                <div class="service-image">
                    <img src="https://i.ibb.co/zWmXFf1Y/usta.png" alt="Mimar">
                </div>
                <div class="service-content">
                    <h2 class="service-title">Mimar mısınız?</h2>
                    <p class="service-description">
                        Platformumuza katılın, uzmanlığınızı sergileyin ve hizmetlerinizi arayan
                        müşterilerle bağlantı kurun. İşinizi büyütün ve projelerinizi verimli bir
                        şekilde yönetin.
                    </p>
                    <ul class="service-features">
                        <li>Profesyonel Profil</li>
                        <li>Proje Yönetim Araçları</li>
                        <li>Güvenli Ödemeler</li>
                    </ul>
                    <div class="cta-container">
                        <button class="cta-button">Hizmet Ver</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div>
                    <h3>İletişim</h3>
                    <ul>
                        <li><i data-lucide="phone"></i> +90 (555) 123-4567</li>
                        <li><i data-lucide="mail"></i> iletisim@mimargelsin.com</li>
                        <li><i data-lucide="map-pin"></i> Mimarlık Caddesi No:123, İstanbul</li>
                    </ul>
                </div>
                <div>
                    <h3>Destek</h3>
                    <ul>
                        <li>Sıkça Sorulan Sorular</li>
                        <li>Yardım Merkezi</li>
                        <li>Kullanım Koşulları</li>
                        <li>Gizlilik Politikası</li>
                    </ul>
                </div>
                <div>
                    <h3>Bağlantılar</h3>
                    <div class="connect-icons">
                        <i data-lucide="instagram"></i>
                        <i data-lucide="twitter"></i>
                        <i data-lucide="mail"></i>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 MimarGelsin. Tüm hakları saklıdır.</p>
            </div>
        </div>
    </footer>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<script src="https://unpkg.com/lucide@latest"></script>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        lucide.createIcons();

        const burgerMenu = document.querySelector('.burger-menu');
        const mobileMenu = document.querySelector('.mobile-menu');
        const menuIcon = burgerMenu.querySelector('i');

        burgerMenu.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
            menuIcon.setAttribute('data-lucide', mobileMenu.classList.contains('active') ? 'x' : 'menu');
            lucide.createIcons();
        });

        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = {
                name: this.name.value,
                phone: this.phone.value
            };
            console.log('Form submitted:', formData);
        });

        const heroImg = document.querySelector('.hero-img');
        const video1 = document.getElementById('video1');
        const video2 = document.getElementById('video2');

        setTimeout(() => {
            heroImg.style.opacity = '0';
            video1.style.opacity = '1';
            setTimeout(() => { heroImg.style.display = 'none'; }, 1000);
        }, 10000);

        setTimeout(() => {
            video1.style.opacity = '0';
            video2.style.opacity = '1';
            setTimeout(() => { video1.style.display = 'none'; }, 1000);
        }, 30000);
    });
</script>
@endpush
