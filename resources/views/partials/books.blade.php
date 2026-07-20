<div class="recommend-card">

    <div class="recommend-left">

        <span class="section-tag">
            Recommendation
        </span>

        <h2>
            CAN BE
            <br>
            INTERESTING
        </h2>

        <div class="recommend-line"></div>

        <p class="recommend-text">
            Find books that might become <br>
            your next favorite. <br><br>

            Explore inspiring stories from <br>
            various genres carefully selected <br>
            for readers.
        </p>

        @auth
            <a href="{{ route('books.create') }}" class="hero-btn mt-3">
                + Add Book
            </a>
        @endauth

    </div>

    <div class="recommend-right">

        @foreach($books as $book)
            @include('partials.book-card')
        @endforeach

    </div>

</div>