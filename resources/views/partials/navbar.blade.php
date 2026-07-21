<nav class="navbar navbar-expand-lg bg-white shadow-sm rounded-4 mt-4 py-3">

    <div class="container-fluid px-5">

        <!-- Logo -->
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">

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
                <form action="{{ route('home') }}" method="GET" class="search-box mx-auto">

            <i class="bi bi-search"></i>

            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Search for a book, author, or category...">

            @if(request('category'))
                <input
                    type="hidden"
                    name="category"
                    value="{{ request('category') }}">
            @endif

        </form>

        <!-- Right -->
        <div class="d-flex align-items-center">

            @guest

                <a href="{{ route('login') }}" class="btn btn-primary rounded-pill px-4">
                    <i class="bi bi-box-arrow-in-right me-1"></i>
                    Login
                </a>

            @else

                <i class="bi bi-bell fs-5 me-4"></i>

                <img
                    src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}"
                    class="rounded-circle"
                    width="45"
                    height="45">

                <span class="fw-semibold ms-2">
                    {{ Auth::user()->name }}
                </span>

                <form method="POST"
                      action="{{ route('logout') }}"
                      class="ms-3">
                    @csrf

                    <button
                        type="submit"
                        class="btn btn-outline-danger btn-sm">

                        <i class="bi bi-box-arrow-right"></i>
                        Logout

                    </button>

                </form>

            @endguest

        </div>

    </div>

</nav>