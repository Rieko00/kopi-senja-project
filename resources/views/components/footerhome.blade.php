<footer class="footer-custom">
    <div class="container-footer">
        <div class="footer-row">
            <div class="footer-col">
                <h4>Hubungi Kami</h4>
                <p>
                    Four Points by Sheraton,<br />
                    Pakuwon Indah (Jl. Raya Lontar No.2, Babatan, Surabaya, East Java)<br />
                    Surabaya, Jawa Timur 60216<br />
                    Telp: 031 3094951<br />
                    Email:
                    <a href="mailto:kopisenja@email.com" style="color: #bbb">kopisenja@email.com</a>
                </p>
            </div>
            <div class="footer-col">
                <h4>Jam Operasional</h4>
                <ul>
                    <li>Senin-Kamis: 08.00-22.00</li>
                    <li>Jumat-Sabtu: 08.00-20.00</li>
                    <li>Minggu: 09.00-20.00</li>
                </ul>
                <h4>Menu</h4>
                <ul>
                    <li>Coffe</li>
                    <li>Non-Coffe</li>
                    <li>Desert</li>
                    <li>Snack</li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Tautan</h4>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/menu') }}">Menu</a></li>
                    <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
                    <li><a href="{{ url('/contact') }}">Kontak</a></li>
                </ul>
                <div class="footer-social">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-credit">
            <span>&copy; 2025 All Rights Reserved.</span>
            <span>Powered by Kopi Senja</span>
        </div>
    </div>
</footer>

<style>
    .footer-custom {
        background: #252220;
        color: #fff;
        padding: 50px 0 40px 0;
        font-family: "Georgia", serif;
        font-weight: 300;
        font-size: 0.95rem;
    }

    .container-footer {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 30px;
    }

    .footer-row {
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-between;
        border-bottom: 1px solid white;
        padding-bottom: 24px;
        gap: 60px;
    }

    .footer-col {
        flex: 1 1 0;
        min-width: 220px;
    }

    .footer-col h4 {
        font-weight: 500;
        font-size: 1.2rem;
        letter-spacing: 1px;
        margin-bottom: 12px;
    }

    .footer-col p,
    .footer-col ul {
        margin: 0;
        color: white;
        font-weight: 300;
        line-height: 1.8;
    }

    .footer-col ul {
        list-style: none;
        padding: 0;
    }

    .footer-col ul li a {
        color: #bbb;
        text-decoration: none;
        transition: color 0.2s;
        font-weight: 300;
    }

    .footer-col ul li a:hover {
        color: #fff;
    }

    .footer-social {
        margin-top: 18px;
    }

    .footer-social a {
        color: #fff;
        margin-right: 16px;
        font-size: 1.4rem;
        text-decoration: none;
    }

    .footer-social a:hover {
        color: #e2b873;
    }

    .footer-credit {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 30px;
        font-size: 0.9rem;
        color: white;
        font-weight: 300;
    }

    .footer-col:nth-child(2) {
        margin-left: 150px;
    }

    .footer-col:nth-child(3) {
        margin-left: 340px;
    }

    .footer-col:nth-child(3) ul li a {
        color: white;
    }

    @media (max-width: 1200px) {

        .footer-col:nth-child(2),
        .footer-col:nth-child(3) {
            margin-left: 0 !important;
        }

        .footer-row {
            flex-wrap: wrap !important;
            gap: 30px;
        }

        .footer-col {
            min-width: 100%;
        }
    }
</style>
