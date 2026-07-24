<section class="search-section">

    <div class="container-custom">

        <div class="search-card">

            <form action="{{ route('home') }}" method="GET">

                <div class="row g-3">

                    <div class="col-lg-5">

                        <label class="search-label">
                            Cari Buku
                        </label>

                        <div class="search-input">

                            <i class="bi bi-search"></i>

                            <input
                                type="text"
                                name="search"
                                placeholder="Cari judul buku..."
                                value="{{ request('search') }}">

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <label class="search-label">
                            Kategori
                        </label>

                        <select name="category">

                            <option value="">
                                Semua Kategori
                            </option>

                            @foreach($categories as $category)

                            <option
                                value="{{ $category->id }}"
                                {{ request('category') == $category->id ? 'selected' : '' }}>

                                {{ $category->nama }}

                            </option>

                            @endforeach

                        </select>

                    </div>

                    <div class="col-lg-3">

                        <label class="search-label invisible">
                            Cari
                        </label>

                        <button class="btn-search">

                            <i class="bi bi-search me-2"></i>

                            Cari Buku

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

</section>