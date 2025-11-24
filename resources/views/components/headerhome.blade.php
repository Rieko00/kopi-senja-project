<header class="header bg-dark text-white">
    <div class="container py-3">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('asset_img/logo_kopisenja.jpg') }}" alt="Logo_KopiSenja" class="header-logo me-2" />
                <h5 class="mb-0">Kopi Senja</h5>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="nav ms-lg-auto flex-column flex-lg-row text-lg-end">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('menu') }}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('contact') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<style>
    .header {
        background: linear-gradient(to bottom, #343a40, #495057);
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .header h5 {
        font-weight: 800;
    }

    .header-logo {
        width: 60px;
        height: auto;
        border-radius: 50%;
        margin-left: -40px;
    }

    .nav .nav-link {
        margin: 0 10px;
        font-weight: 700;
        font-size: 1.1rem;
        padding: 1rem 1.2rem;
    }

    @media (max-width: 768px) {
        .header-logo {
            width: 45px;
            margin-left: 0;
        }

        .nav .nav-link {
            font-size: 1rem;
            padding: 0.7rem;
        }
    }
</style>
