<div class="book-item card border-0 shadow-sm rounded-4 h-100">

    <div class="book-image">

        @php
            $image = file_exists(public_path('storage/books/' . $book->gambar))
                ? asset('storage/books/' . $book->gambar)
                : asset('images/' . $book->gambar);
        @endphp

        <img
            src="{{ $image }}"
            class="book-cover"
            alt="{{ $book->judul }}"
            onerror="this.src='{{ asset('images/logo.jpg') }}'">

    </div>

    <div class="card-body d-flex flex-column">

        <span class="badge bg-primary mb-2 align-self-start">
            {{ $book->category?->nama ?? 'Book' }}
        </span>

        <h5 class="fw-bold mb-2">
            {{ $book->judul }}
        </h5>

        <p class="text-muted mb-4">
            <i class="bi bi-person-fill"></i>
            {{ $book->author?->nama ?? '-' }}
        </p>

        <div class="mt-auto d-flex justify-content-between">

            <a href="{{ route('books.show',$book->id) }}"
                class="btn btn-outline-primary rounded-pill">

                <i class="bi bi-eye-fill"></i>

            </a>

            @auth

            <a href="{{ route('books.edit',$book->id) }}"
                class="btn btn-warning rounded-pill text-white">

                <i class="bi bi-pencil-fill"></i>

            </a>

            <form
                action="{{ route('books.destroy',$book->id) }}"
                method="POST"
                class="delete-form">

                @csrf
                @method('DELETE')

                <button class="btn btn-danger rounded-pill">

                    <i class="bi bi-trash-fill"></i>

                </button>

            </form>

            @endauth

        </div>

    </div>

</div>