<nav class="navbar navbar-expand-lg navbar-custom sticky-top">
    <div class="container-custom">

        {{-- Logo --}}
        <a class="navbar-brand d-flex align-items-center" href="/">
            <div class="logo-box">
                <i class="bi bi-book-half"></i>
            </div>

            <div class="ms-2">
                <h5 class="logo-title mb-0">BookNest</h5>
                <small class="logo-subtitle">Katalog Buku</small>
            </div>
        </a>

        {{-- Mobile Button --}}
        <button class="navbar-toggler border-0 shadow-none" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu">

            <i class="bi bi-list fs-2"></i>

        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="/">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#books">Buku</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/kategori">Kategori</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/tentang">Tentang</a>
                </li>

            </ul>

            <div class="d-flex align-items-center gap-3">

                <button class="theme-btn">

                    <i class="bi bi-moon-stars"></i>

                </button>

                <a href="/login" class="btn-login">

                    Login

                </a>

            </div>

        </div>

    </div>
</nav>