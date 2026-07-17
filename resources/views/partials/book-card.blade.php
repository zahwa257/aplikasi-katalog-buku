<div class="book-item">

    <div class="book-image">

        <img
            src="{{ asset('images/'.$book->gambar) }}"
            class="book-cover"
            alt="{{ $book->judul }}">

    </div>

    <div class="book-content">

        <span class="book-category">
            {{ $book->category?->nama ?? 'Book' }}
        </span>

        <h5>
            {{ $book->judul }}
        </h5>

        <p class="book-author">

            <i class="bi bi-person-fill"></i>

            {{ $book->author?->nama ?? '-' }}

        </p>

    </div>

    <div class="book-action">

        <a
            href="{{ route('books.show',$book->id) }}"
            class="btn btn-detail">

            <i class="bi bi-eye-fill"></i>

        </a>

        <a
            href="{{ route('books.edit',$book->id) }}"
            class="btn btn-edit">

            <i class="bi bi-pencil-fill"></i>

        </a>

<form
    class="delete-form"
    action="{{ route('books.destroy',$book->id) }}"
    method="POST">

    @csrf
    @method('DELETE')

    <button
        type="submit"
        class="btn btn-delete">

        <i class="bi bi-trash-fill"></i>

    </button>

</form>

    </div>

</div>