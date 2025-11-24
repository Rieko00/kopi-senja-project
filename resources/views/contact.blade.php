@extends('layouts.apphome')

@section('title', 'Kopi Senja - Kontak dan Lokasi')

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

        /* --- SECTION AUTHENTIC MENU (Temukan Kami) --- */
        .authentic-menu-section {
            background-color: #f4f1e9;
            padding: 60px 0;
            color: black;
            text-align: center;
        }

        .container-authentic {
            max-width: 900px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0 20px;
        }

        .text-authentic h2 {
            font-size: 28px;
            font-weight: 550;
            margin-bottom: 30px;
        }

        .text-authentic p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
            max-width: 700px;
        }

        /* Layout Kontak dan Jam Operasional */
        .sn-info-2 {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            gap: 60px;
            padding: 0 15px;
            max-width: 900px;
            margin: 0 auto;
        }

        .sn-info-2 h2 {
            font-size: 24px;
            font-weight: 600;
            margin-top: 20px;
            margin-bottom: 20px;
            color: #343a40;
        }

        .sn-info-2 p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
            color: #555;
        }

        .sn-info-2 a {
            color: #007bff;
            text-decoration: none;
        }

        .sn-info-2 a:hover {
            text-decoration: underline;
        }

        .pd-16px {
            flex: 1;
            text-align: left;
            padding: 16px;
        }

        /* Iframe Peta Responsif */
        .map-container {
            position: relative;
            padding-bottom: 56.25%;
            /* Rasio aspek 16:9 */
            height: 0;
            overflow: hidden;
            max-width: 900px;
            margin: 0 auto 60px auto;
            width: 100%;
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }

        /* --- MEDIA QUERIES --- */
        @media (max-width: 992px) {
            body {
                padding-top: 60px;
            }

            .hero-subtitle {
                font-size: 2.2rem;
            }

            .sn-info-2 {
                flex-direction: column;
                align-items: center;
                text-align: center;
                gap: 30px;
            }

            .pd-16px {
                width: 100%;
                text-align: center;
            }

            .map-container {
                padding: 0 15px;
                padding-bottom: 75%;
            }
        }

        @media (max-width: 768px) {
            .hero-subtitle {
                font-size: 2rem;
            }

            .text-authentic h2 {
                font-size: 24px;
            }

            .text-authentic p {
                font-size: 14px;
            }

            .sn-info-2 h2 {
                font-size: 20px;
            }

            .sn-info-2 p {
                font-size: 14px;
            }
        }

        @media (max-width: 576px) {
            body {
                padding-top: 70px;
            }

            .hero-subtitle {
                font-size: 1.8rem;
            }

            .text-authentic h2 {
                font-size: 22px;
            }

            .text-authentic p {
                font-size: 13px;
                margin-bottom: 30px;
            }

            .map-container {
                padding-bottom: 100%;
            }
        }
    </style>
@endpush

@section('content')
    <section class="hero-section text-white">
        <div class="hero-content">
            <p class="hero-subtitle">Kontak dan Lokasi</p>
        </div>
    </section>

    <section class="authentic-menu-section">
        <div class="container-authentic">
            <div class="text-authentic">
                <h2>Temukan kami</h2>
                <p>Kopi Senja merupakan kafe dengan
                    gaya yang ramah untuk masyarakat Surabaya dan sekitarnya. Nikmati kopi sambil menikmati suasana
                    sore hari di tempat yang terbuka nan teduh.</p>
            </div>
        </div>
    </section>

    <section class="authentic-menu-section">
        <div class="sn-info-2">
            <div class="pd-16px">
                <h2>Lokasi Kopi Senja</h2>
                <p>
                    Pakuwon Indah (Jl. Raya Lontar No.2, Babatan, Surabaya, East
                    Java), Jawa Timur 69115
                </p>
                <h2>Kontak Kopi Senja</h2>
                <p>
                    Telepon/WA: <a href="tel:+62-000-11222-1">+62 000 11222 1</a>
                </p>
                <p>
                    Surel (E-mail): <a href="mailto:kopisenja.thesky@bangkalan.svr">kopisenja.thesky@bangkalan.svr</a>
                </p>
            </div>
            <div class="pd-16px">
                <h2>Jam operasional</h2>
                <p>
                    Senin sampai Kamis:
                    08.00-22.00
                </p>
                <p>
                    Jum'at dan Sabtu:
                    08.00-20.00
                </p>
                <p>
                    Minggu: 09.00-20.00
                </p>
                <p>Hari libur tetap buka</p>
            </div>
        </div>
    </section>

    <section class="authentic-menu-section">
        <div class="map-container">
            <iframe
                src="https://maps.google.com/maps?q=The+Sky,+Jl.+HOS.+Cokroaminoto+No.66,+Demangan+Barat,+Pangeranan,+Kec.+Bangkalan,+Kabupaten+Bangkalan,+Jawa+Timur+69115&t=&z=15&ie=UTF8&iwloc=&output=embed"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>
@endsection
