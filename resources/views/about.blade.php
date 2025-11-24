@extends('layouts.apphome')

@section('title', 'Kopi Senja - Tentang Kami')

@push('styles')
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            background-color: #f8f9fa;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: #333;
            padding-top: 80px;
            /* Offset untuk fixed header */
        }

        .hero-section {
            height: 100vh;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)),
                url("{{ asset('asset_img/about.jpg') }}");
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
            position: relative;
        }

        .hero-section:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 40%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), transparent);
            z-index: 1;
        }

        .hero-section:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 15%;
            background: linear-gradient(to top, rgba(255, 255, 255, 0.5), transparent);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            max-width: 80%;
            z-index: 2;
        }

        .hero-subtitle {
            font-style: italic;
            font-weight: 500;
            font-size: 3.5rem;
            margin: 0;
            text-align: center;
            color: white;
        }

        .about-section {
            background-color: #f4f1e9;
            padding: 80px 0;
            color: black;
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 60px;
            margin-bottom: 60px;
        }

        .about-text {
            flex: 1;
        }

        .about-text h2 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 30px;
            color: #2c3e50;
        }

        .about-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 20px;
            color: #555;
            text-align: justify;
        }

        .about-image {
            flex: 1;
            text-align: center;
        }

        .about-image img {
            width: 100%;
            max-width: 500px;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .features-section {
            background-color: #fff;
            padding: 80px 0;
        }

        .features-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .features-container h2 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 50px;
            color: #2c3e50;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .feature-item {
            background: #f8f9fa;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 3rem;
            color: #8b4513;
            margin-bottom: 20px;
        }

        .feature-item h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #2c3e50;
        }

        .feature-item p {
            font-size: 1rem;
            line-height: 1.6;
            color: #666;
        }

        /* Media Queries */
        @media (max-width: 992px) {
            body {
                padding-top: 60px;
            }

            .hero-subtitle {
                font-size: 2.5rem;
            }

            .about-content {
                flex-direction: column;
                gap: 40px;
            }

            .about-text h2 {
                font-size: 2rem;
                text-align: center;
            }

            .features-container h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 768px) {
            .hero-subtitle {
                font-size: 2rem;
            }

            .about-section,
            .features-section {
                padding: 60px 0;
            }

            .about-text h2 {
                font-size: 1.8rem;
            }

            .about-text p {
                font-size: 1rem;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            body {
                padding-top: 70px;
            }

            .hero-subtitle {
                font-size: 1.8rem;
            }

            .about-section,
            .features-section {
                padding: 40px 0;
            }

            .feature-item {
                padding: 30px 20px;
            }
        }
    </style>
@endpush

@section('content')
    <section class="hero-section text-white">
        <div class="hero-content">
            <p class="hero-subtitle">Tentang Kami</p>
        </div>
    </section>

    <section class="about-section">
        <div class="about-container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Cerita Kopi Senja</h2>
                    <p>
                        Kopi Senja hadir sebagai tempat berkumpul yang hangat di tengah hiruk pikuk kehidupan kota.
                        Didirikan dengan visi menciptakan ruang yang nyaman untuk menikmati secangkir kopi berkualitas
                        sambil merasakan ketenangan di setiap senja.
                    </p>
                    <p>
                        Kami percaya bahwa setiap cangkir kopi memiliki cerita tersendiri. Dari biji kopi pilihan
                        yang dipanggang dengan sempurna hingga sajian yang dibuat dengan penuh perhatian,
                        setiap detail dirancang untuk memberikan pengalaman yang tak terlupakan.
                    </p>
                    <p>
                        Lebih dari sekadar kedai kopi, Kopi Senja adalah tempat di mana komunitas berkembang,
                        ide-ide lahir, dan momen-momen berharga tercipta bersama secangkir kehangatan.
                    </p>
                </div>
                <div class="about-image">
                    <img src="{{ asset('asset_img/cafe.jpg') }}" alt="Suasana Kopi Senja">
                </div>
            </div>
        </div>
    </section>

    <section class="features-section">
        <div class="features-container">
            <h2>Yang Membuat Kami Istimewa</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">☕</div>
                    <h3>Kopi Berkualitas Premium</h3>
                    <p>Menggunakan biji kopi pilihan terbaik yang dipanggang dengan teknik khusus untuk menciptakan cita
                        rasa yang sempurna.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🏠</div>
                    <h3>Suasana Hangat & Nyaman</h3>
                    <p>Desain interior yang warm dan welcoming, cocok untuk bersantai, bekerja, atau berkumpul bersama
                        teman.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">👥</div>
                    <h3>Pelayanan Ramah</h3>
                    <p>Tim barista profesional yang siap melayani dengan senyuman dan memberikan rekomendasi terbaik untuk
                        Anda.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🌅</div>
                    <h3>Pengalaman Senja</h3>
                    <p>Nikmati momen senja yang indah sambil menyeruput kopi hangat di tempat yang dirancang khusus untuk
                        ketenangan.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
