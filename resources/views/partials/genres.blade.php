<div class="genre-list">

    <a href="{{ route('home') }}"
       class="genre-btn {{ request('category') ? '' : 'active' }}">
        All Genres
    </a>

    @foreach ($categories as $category)

        <a href="{{ route('home', [
            'category' => $category->id,
            'search' => request('search')
        ]) }}"
           class="genre-btn {{ request('category') == $category->id ? 'active' : '' }}">

            {{ $category->nama }}

        </a>

    @endforeach

</div>