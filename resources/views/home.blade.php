@extends('layouts.apphome')

@section('title', 'Kopi Senja - Home')

@push('styles')
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            background-color: #f8f9fa;
            font-family: "Georgia", sans-serif;
            color: #333;
        }

        .hero-section {
            height: 100vh;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)), url("{{ asset('asset_img/cafe.jpg') }}");
            background-size: 103%;
            background-position: center;
            display: flex;
            flex-direction: column;
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
        }

        .hero-subtitle {
            font-style: italic;
            font-weight: 500;
            font-family: "Georgia", serif;
            font-size: 2rem;
            margin-top: 4rem;
            margin-bottom: 0;
            margin-left: -580px;
            color: white;
        }

        .authentic-menu-section {
            background-color: #d8cebf;
            padding: 60px 0;
            font-family: "Georgia", serif;
            color: black;
        }

        .container-authentic {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 50px;
            padding: 0 20px;
        }

        .text-authentic {
            flex: 1;
            max-width: 500px;
        }

        .text-authentic h2 {
            font-size: 28px;
            font-weight: 550;
            margin-bottom: 50px;
        }

        .text-authentic p {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 50px;
        }

        .btn-authentic {
            font-family: "Georgia", serif;
            font-weight: 300;
            font-size: 12px;
            color: black;
            background: none;
            border: 1px solid black;
            cursor: pointer;
            padding: 10px 25px;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-authentic:hover {
            background-color: #7a7a7a;
            color: white;
            border-color: #7a7a7a;
        }

        .image-authentic {
            flex: 1;
            max-width: 800px;
        }

        .image-authentic img {
            width: 105%;
            object-fit: cover;
        }

        /* Responsive styles */
        @media (max-width: 1200px) {
            .hero-subtitle {
                margin-left: 0;
                text-align: center;
            }

            .container-authentic {
                flex-direction: column;
                text-align: center;
            }

            .image-authentic img {
                width: 100%;
            }

            .text-authentic {
                max-width: 100%;
            }
        }

        @media (max-width: 992px) {
            .hero-section {
                background-size: cover;
                padding: 0 20px;
            }

            .hero-subtitle {
                font-size: 1.6rem;
                margin-left: 0;
                text-align: center;
            }

            .authentic-menu-section {
                padding: 40px 20px;
            }

            .container-authentic {
                flex-direction: column;
                gap: 20px;
            }
        }

        @media (max-width: 768px) {
            .hero-subtitle {
                font-size: 1.4rem;
                margin-top: 2rem;
            }

            .hero-section {
                background-position: center;
                background-size: cover;
                height: 80vh;
            }
        }

        @media (max-width: 576px) {
            .hero-subtitle {
                font-size: 1.2rem;
                margin-left: 0;
                text-align: center;
            }

            .hero-section {
                height: 70vh;
                padding: 0 10px;
            }
        }
    </style>
@endpush

@section('content')
    <section class="hero-section text-white">
        <div class="hero-content">
            <p class="hero-subtitle">"Nikmati secangkir kehangatan di setiap senja"</p>
        </div>
    </section>

    <section class="authentic-menu-section">
        <div class="container-authentic">
            <div class="text-authentic">
                <h2>Kelezatan Menu Otentik Kopi Senja</h2>
                <p>
                    Manjakan lidah dengan suasana hangat dan nyaman di Kopi Senja. Nikmati setiap cangkir kopi pilihan
                    dan sajian khas yang menghadirkan kenikmatan otentik dalam setiap tegukan. Rasakan pengalaman
                    berbeda dengan cita rasa kopi terbaik dan layanan ramah kami.
                </p>
                <p>Sampai jumpa di Kopi Senja untuk menikmati kehangatan dalam setiap senja!</p>
                <a href="{{ url('/menu') }}" class="btn-authentic">LEBIH LANJUT</a>
            </div>
            <div class="image-authentic">
                <img src="{{ asset('asset_img/cafe.jpg') }}" alt="Suasana Kopi Senja" />
            </div>
        </div>
    </section>
@endsection
