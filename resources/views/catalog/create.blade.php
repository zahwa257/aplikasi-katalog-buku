@extends('layouts.app')

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

        <form action="{{ route('books.store') }}" method="POST">

            @csrf

            <div class="mb-4">

                <label>Judul Buku</label>

                <input
                    type="text"
                    name="judul"
                    class="form-control"
                    value="{{ old('judul') }}"
                    required>

            </div>

            <div class="mb-4">

                <label>Penulis</label>

                <select
                    name="author_id"
                    class="form-select"
                    required>

                    <option value="">Pilih Penulis</option>

                    @foreach($authors as $author)

                        <option value="{{ $author->id }}">

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

                    <option value="">Pilih Kategori</option>

                    @foreach($categories as $category)

                        <option value="{{ $category->id }}">

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
                    placeholder="contoh : dilan.jpg"
                    required>

            </div>

            <div class="d-flex gap-3">

                <button class="btn-save">

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