<section class="genre-section">

    <div class="genre-list">

        <a href="{{ route('home') }}"
            class="genre-btn {{ request('category') ? '' : 'active' }}">

            <i class="bi bi-grid me-2"></i>

            Semua

        </a>

        @foreach($categories as $category)

            <a
                href="{{ route('home',[
                    'category'=>$category->id,
                    'search'=>request('search'),
                    'sort'=>request('sort')
                ]) }}"

                class="genre-btn {{ request('category')==$category->id ? 'active' : '' }}">

                {{ $category->nama }}

            </a>

        @endforeach

    </div>

</section>