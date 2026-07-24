<div class="book-card">

    <div class="book-image">

        <img src="{{ asset('images/' . $book->gambar) }}"
             alt="{{ $book->judul }}">

        <span class="book-category">

            {{ $book->category->nama }}

        </span>

    </div>

    <div class="book-content">

        <small class="book-author">

            <i class="bi bi-person-circle me-1"></i>

            {{ $book->author->nama }}

        </small>

        <h4>

            {{ $book->judul }}

        </h4>

        <div class="book-footer">

            <a href="{{ route('books.show',$book->id) }}"
               class="detail-btn">

                Lihat Detail

                <i class="bi bi-arrow-right-short"></i>

            </a>

        </div>

    </div>

</div>