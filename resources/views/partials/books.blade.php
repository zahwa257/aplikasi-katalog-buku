<section class="books-section" id="books">

    <div class="container-custom">

        <div class="section-header">

            <div>

                <span class="section-badge">
                    📚 Koleksi Kami
                </span>

                <h2 class="section-title mt-3">
                    Koleksi Buku Terbaru
                </h2>

                <p class="section-description">
                    Temukan berbagai buku pilihan dari berbagai kategori yang siap menemani waktu bacamu.
                </p>

            </div>

            <a href="#books" class="btn-outline-custom">
             Lihat Semua
            </a>

        </div>

        <div class="row g-4 mt-2">

            @forelse($books as $book)

                <div class="col-lg-3 col-md-6">

                    @include('partials.book-card')

                </div>

            @empty

                <div class="col-12">

                    <div class="empty-state">

                        <i class="bi bi-journal-x"></i>

                        <h4>Belum ada buku</h4>

                        <p>
                            Data buku masih kosong.
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>