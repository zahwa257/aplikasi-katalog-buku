<div class="hero-card">

    <div class="hero-left">

        <span class="hero-tag">
            Featured Collection
        </span>

        <h1>
            POPULAR
            <br>
            <span>BESTSELLERS</span>
        </h1>

        <p>
            Discover our most popular books this month. Explore inspiring stories,
            best-selling novels, and timeless classics chosen just for you.
        </p>

        <a href="#" class="hero-btn">
            Watch Full List
        </a>

    </div>

    <div class="hero-right">

        @foreach($books->take(3) as $book)

            <div class="hero-book">

                <img
                    src="{{ asset('images/'.$book->gambar) }}"
                    alt="{{ $book->judul }}">

            </div>

        @endforeach

        <div class="bookshelf"></div>

    </div>

</div>