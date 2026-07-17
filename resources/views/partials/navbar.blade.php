<nav class="navbar navbar-expand-lg bg-white shadow-sm rounded-4 mt-4 py-3">

    <div class="container-fluid px-5">

        <!-- Logo -->
        <a href="#" class="navbar-brand d-flex align-items-center">

            <img
                src="{{ asset('images/logo.jpg') }}"
                alt="Logo"
                width="48"
                height="48">

            <div class="ms-2">

                <h3 class="fw-bold mb-0">
                    Katalog
                </h3>

                <span class="text-warning fw-semibold">
                    Buku
                </span>

            </div>

        </a>

        <!-- Search -->
        <div class="search-box mx-auto">

            <i class="bi bi-search"></i>

            <input
                type="text"
                placeholder="Search for a book, author, or category...">

        </div>

        <!-- Right -->
        <div class="d-flex align-items-center">

            <i class="bi bi-bell fs-5 me-4"></i>

            <img
                src="https://ui-avatars.com/api/?name=User"
                class="rounded-circle"
                width="45"
                height="45">

            <span class="fw-semibold ms-2">
                Obrolan
            </span>

            <i class="bi bi-chevron-down ms-2"></i>

        </div>

    </div>

</nav>