@extends('layouts.apphome')

@section('title', 'Kopi Senja - Menu')

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
        }

        .hero-section {
            height: 100vh;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)),
                url("{{ asset('asset_img/header.jpg') }}");
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

        .section-intro {
            max-width: 1000px;
            margin: 24px auto 0;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f4f1e9;
            padding: 30px 20px;
            border-radius: 10px;
        }

        .section-intro p {
            margin: 0;
            font-size: 16px;
            color: #666;
        }

        .section-intro strong {
            font-size: 24px;
            color: #2c3e50;
        }

        .menu-section {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .menu-section h2 {
            font-size: 28px;
            font-weight: 600;
            color: #8b4513;
            border-bottom: 2px solid #8b4513;
            padding-bottom: 10px;
            margin: 0 0 30px;
            text-align: center;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            justify-content: center;
        }

        .menu-item {
            position: relative;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .menu-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .menu-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }

        .menu-item h3 {
            margin: 15px 0 10px;
            padding: 0 15px;
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            color: #2c3e50;
            text-align: center;
            font-size: 1.1rem;
        }

        .price-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 2;
            background: rgba(139, 69, 19, 0.9);
            color: white;
            padding: 8px 12px;
            border-radius: 20px;
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-size: 0.9rem;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
        }

        /* Media Queries */
        @media (max-width: 992px) {
            body {
                padding-top: 60px;
            }

            .hero-subtitle {
                font-size: 2.5rem;
            }

            .section-intro {
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }

            .menu-grid {
                grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
                gap: 20px;
            }
        }

        @media (max-width: 768px) {
            .hero-subtitle {
                font-size: 2rem;
            }

            .menu-section h2 {
                font-size: 24px;
            }

            .menu-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 15px;
            }

            .menu-item img {
                height: 150px;
            }

            .price-badge {
                padding: 6px 10px;
                font-size: 0.8rem;
            }
        }

        @media (max-width: 576px) {
            body {
                padding-top: 70px;
            }

            .hero-subtitle {
                font-size: 1.8rem;
            }

            .menu-grid {
                grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            }

            .menu-section {
                padding: 0 10px;
            }
        }
    </style>
@endpush

@section('content')
    <section class="hero-section text-white">
        <div class="hero-content">
            <p class="hero-subtitle">Menu Kami</p>
        </div>
    </section>

    <div class="section-intro">
        <p>Buka setiap hari<br />Senin–Minggu: 10.30 – 22.00</p>
        <strong>Ala Carte Menu</strong>
    </div>

    <div class="menu-section">
        <h2>Kopi</h2>
        <div class="menu-grid" id="kopi"></div>
    </div>

    <div class="menu-section">
        <h2>Non-Kopi</h2>
        <div class="menu-grid" id="nonkopi"></div>
    </div>

    <div class="menu-section">
        <h2>Dessert</h2>
        <div class="menu-grid" id="dessert"></div>
    </div>

    <div class="menu-section">
        <h2>Camilan</h2>
        <div class="menu-grid" id="camilan"></div>
    </div>

    <div class="menu-section">
        <h2>Makanan</h2>
        <div class="menu-grid" id="makanan"></div>
    </div>
@endsection

@push('scripts')
    <script>
        const menuData = {
            kopi: [{
                    name: "Americano",
                    price: "15k",
                    img: "{{ asset('asset_img/americano.jpg') }}"
                },
                {
                    name: "Latte",
                    price: "20k",
                    img: "{{ asset('asset_img/latte.jpg') }}"
                },
                {
                    name: "Cappuccino",
                    price: "20k",
                    img: "{{ asset('asset_img/cappuccino.jpg') }}"
                },
                {
                    name: "Espresso",
                    price: "15k",
                    img: "{{ asset('asset_img/espresso.jpg') }}"
                },
                {
                    name: "Mocha",
                    price: "22k",
                    img: "{{ asset('asset_img/mocha.jpg') }}"
                },
                {
                    name: "Macchiato",
                    price: "25k",
                    img: "{{ asset('asset_img/macchiato.jpg') }}"
                }
            ],
            nonkopi: [{
                    name: "Matcha Latte",
                    price: "22k",
                    img: "{{ asset('asset_img/matcha.jpg') }}"
                },
                {
                    name: "Red Velvet",
                    price: "22k",
                    img: "{{ asset('asset_img/red-velvet.jpg') }}"
                },
                {
                    name: "Lemon Tea",
                    price: "12k",
                    img: "{{ asset('asset_img/lemon-tea.jpg') }}"
                },
                {
                    name: "Hot Chocolate",
                    price: "18k",
                    img: "{{ asset('asset_img/hot-chocolate.jpg') }}"
                },
                {
                    name: "Thai Tea",
                    price: "15k",
                    img: "{{ asset('asset_img/thai-tea.jpg') }}"
                },
                {
                    name: "Fruit Smoothie",
                    price: "20k",
                    img: "{{ asset('asset_img/smoothie.jpg') }}"
                }
            ],
            dessert: [{
                    name: "Croissant",
                    price: "15k",
                    img: "{{ asset('asset_img/croissant.jpg') }}"
                },
                {
                    name: "Brownies",
                    price: "12k",
                    img: "{{ asset('asset_img/brownies.jpg') }}"
                },
                {
                    name: "Cheesecake",
                    price: "25k",
                    img: "{{ asset('asset_img/cheesecake.jpg') }}"
                },
                {
                    name: "Donat Coklat",
                    price: "10k",
                    img: "{{ asset('asset_img/donut.jpg') }}"
                },
                {
                    name: "Tiramisu",
                    price: "28k",
                    img: "{{ asset('asset_img/tiramisu.jpg') }}"
                },
                {
                    name: "Apple Pie",
                    price: "20k",
                    img: "{{ asset('asset_img/apple-pie.jpg') }}"
                }
            ],
            camilan: [{
                    name: "French Fries",
                    price: "18k",
                    img: "{{ asset('asset_img/french-fries.jpg') }}"
                },
                {
                    name: "Roti Bakar",
                    price: "15k",
                    img: "{{ asset('asset_img/roti-bakar.jpg') }}"
                },
                {
                    name: "Onion Rings",
                    price: "15k",
                    img: "{{ asset('asset_img/onion-rings.jpg') }}"
                },
                {
                    name: "Cireng",
                    price: "12k",
                    img: "{{ asset('asset_img/cireng.jpg') }}"
                },
                {
                    name: "Pisang Goreng",
                    price: "10k",
                    img: "{{ asset('asset_img/pisang-goreng.jpg') }}"
                },
                {
                    name: "Spring Roll",
                    price: "16k",
                    img: "{{ asset('asset_img/spring-roll.jpg') }}"
                }
            ],
            makanan: [{
                    name: "Lasagna",
                    price: "30k",
                    img: "{{ asset('asset_img/lasagna.jpg') }}"
                },
                {
                    name: "Chicken Katsu",
                    price: "28k",
                    img: "{{ asset('asset_img/chicken-katsu.jpg') }}"
                },
                {
                    name: "Chicken Steak",
                    price: "35k",
                    img: "{{ asset('asset_img/chicken-steak.jpg') }}"
                },
                {
                    name: "Hotdog Jumbo",
                    price: "20k",
                    img: "{{ asset('asset_img/hotdog.jpg') }}"
                },
                {
                    name: "Beef Burger",
                    price: "32k",
                    img: "{{ asset('asset_img/burger.jpg') }}"
                },
                {
                    name: "Pasta Carbonara",
                    price: "26k",
                    img: "{{ asset('asset_img/pasta.jpg') }}"
                }
            ]
        };

        function renderMenu(section, items) {
            const container = document.getElementById(section);
            if (!container) return;

            // Clear existing content
            container.innerHTML = '';

            items.forEach((item) => {
                const div = document.createElement("div");
                div.className = "menu-item";
                div.innerHTML = `
            <img src="${item.img}" alt="${item.name}" onerror="this.src='{{ asset('asset_img/default-food.jpg') }}'">
            <div class="price-badge">${item.price}</div>
            <h3>${item.name}</h3>
        `;
                container.appendChild(div);
            });
        }

        function initializeMenu() {
            Object.keys(menuData).forEach((section) => {
                const grid = document.getElementById(section);
                if (grid) {
                    renderMenu(section, menuData[section]);
                }
            });
        }

        // Initialize menu when DOM is loaded
        document.addEventListener("DOMContentLoaded", initializeMenu);

        // Optional: Add loading animation
        function showLoadingAnimation() {
            Object.keys(menuData).forEach((section) => {
                const container = document.getElementById(section);
                if (container) {
                    container.innerHTML = `
                <div style="text-align: center; padding: 20px; color: #666;">
                    <i class="fas fa-spinner fa-spin fa-2x"></i>
                    <p>Loading menu...</p>
                </div>
            `;
                }
            });
        }

        // Optional: Simulate loading delay
        document.addEventListener("DOMContentLoaded", () => {
            showLoadingAnimation();
            setTimeout(initializeMenu, 500);
        });
    </script>
@endpush
