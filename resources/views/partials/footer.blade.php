<footer class="footer">

    <div class="container-custom">

        <div class="row gy-5">

            {{-- Logo --}}
            <div class="col-lg-4">

                <div class="footer-logo">

                    <div class="logo-box">
                        <i class="bi bi-book-half"></i>
                    </div>

                    <div class="ms-3">

                        <h4>BookNest</h4>

                        <p>
                            Platform katalog buku modern untuk menemukan buku favoritmu dengan mudah dan cepat.
                        </p>

                    </div>

                </div>

            </div>

            {{-- Menu --}}
            <div class="col-lg-2">

                <h5>Menu</h5>

                <ul>

                    <li><a href="/">Beranda</a></li>

                    <li><a href="/books">Buku</a></li>

                    <li><a href="/kategori">Kategori</a></li>

                    <li><a href="/tentang">Tentang</a></li>

                </ul>

            </div>

            {{-- Bantuan --}}
            <div class="col-lg-3">

                <h5>Bantuan</h5>

                <ul>

                    <li><a href="#">FAQ</a></li>

                    <li><a href="#">Kontak</a></li>

                    <li><a href="#">Kebijakan Privasi</a></li>

                    <li><a href="#">Syarat & Ketentuan</a></li>

                </ul>

            </div>

            {{-- Sosial Media --}}
            <div class="col-lg-3">

                <h5>Ikuti Kami</h5>

                <div class="social-icons">

                    <a href="#"><i class="bi bi-facebook"></i></a>

                    <a href="#"><i class="bi bi-instagram"></i></a>

                    <a href="#"><i class="bi bi-twitter-x"></i></a>

                    <a href="#"><i class="bi bi-youtube"></i></a>

                </div>

            </div>

        </div>

        <hr>

        <div class="footer-bottom">

            <p>
                © {{ date('Y') }} BookNest. All Rights Reserved.
            </p>

            <span>
                Dibuat dengan ❤️ menggunakan Laravel
            </span>

        </div>

    </div>

</footer>