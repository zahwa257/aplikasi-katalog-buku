@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')

<div class="container py-5">

    <div class="form-card">

        <div class="form-header">

            <h2>
                <i class="bi bi-pencil-square"></i>
                Edit Buku
            </h2>

            <p>
                Perbarui informasi buku pada katalog.
            </p>

        </div>

        @if ($errors->any())

            <div class="alert alert-danger">

                <ul class="mb-0">

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <form action="{{ route('books.update',$book->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">

                <label>Judul Buku</label>

                <input
                    type="text"
                    name="judul"
                    class="form-control"
                    value="{{ old('judul',$book->judul) }}"
                    required>

            </div>

            <div class="mb-4">

                <label>Penulis</label>

                <select
                    name="author_id"
                    class="form-select"
                    required>

                    @foreach($authors as $author)

                        <option
                            value="{{ $author->id }}"
                            {{ $book->author_id == $author->id ? 'selected' : '' }}>

                            {{ $author->nama }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-4">

                <label>Kategori</label>

                <select
                    name="category_id"
                    class="form-select"
                    required>

                    @foreach($categories as $category)

                        <option
                            value="{{ $category->id }}"
                            {{ $book->category_id == $category->id ? 'selected' : '' }}>

                            {{ $category->nama }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-4">

                <label>Nama File Cover</label>

                <input
                    type="text"
                    name="gambar"
                    class="form-control"
                    value="{{ old('gambar',$book->gambar) }}"
                    required>

            </div>

            <div class="d-flex gap-3">

                <button class="btn-save">

                    <i class="bi bi-check-lg"></i>

                    Update

                </button>

                <a
                    href="{{ route('books.index') }}"
                    class="btn-cancel">

                    Kembali

                </a>

            </div>

        </form>

    </div>

</div>

@endsection