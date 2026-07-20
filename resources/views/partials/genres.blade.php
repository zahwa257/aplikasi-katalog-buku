<div class="genre-list">

    <button class="genre-btn active">
        All Genres
    </button>

    @foreach ($categories as $category)

        <button class="genre-btn">
            {{ $category->nama }}
        </button>

    @endforeach

</div>