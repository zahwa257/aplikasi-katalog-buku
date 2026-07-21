@extends('layouts.catalog')

@section('title', 'Tambah Buku')

@section('content')

<div class="container py-5">

    <div class="form-card">

        <div class="form-header">

            <h2>
                <i class="bi bi-book-half"></i>
                Tambah Buku
            </h2>

            <p>
                Tambahkan koleksi buku baru ke katalog.
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

        <form action="{{ route('books.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            {{-- Judul --}}
            <div class="mb-4">

                <label>Judul Buku</label>

                <input
                    type="text"
                    name="judul"
                    class="form-control"
                    value="{{ old('judul') }}"
                    required>

            </div>

            {{-- Penulis --}}
            <div class="mb-4">

                <label>Penulis</label>

                <select
                    name="author_id"
                    class="form-select"
                    required>

                    <option value="">Pilih Penulis</option>

                    @foreach($authors as $author)

                        <option
                            value="{{ $author->id }}"
                            {{ old('author_id') == $author->id ? 'selected' : '' }}>

                            {{ $author->nama }}

                        </option>

                    @endforeach

                </select>

            </div>

            {{-- Kategori --}}
            <div class="mb-4">

                <label>Kategori</label>

                <select
                    name="category_id"
                    class="form-select"
                    required>

                    <option value="">Pilih Kategori</option>

                    @foreach($categories as $category)

                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}>

                            {{ $category->nama }}

                        </option>

                    @endforeach

                </select>

            </div>

            {{-- Upload Cover --}}
            <div class="mb-4">

                <label>Upload Cover Buku</label>

                <input
                    type="file"
                    name="gambar"
                    class="form-control"
                    accept=".jpg,.jpeg,.png"
                    required>

                <small class="text-muted">
                    Format: JPG, JPEG, PNG (Maksimal 2 MB)
                </small>

            </div>

            <div class="d-flex gap-3">

                <button type="submit" class="btn-save">

                    <i class="bi bi-check-lg"></i>

                    Simpan

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