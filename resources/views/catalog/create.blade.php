@extends('layouts.catalog')

@section('title', 'Tambah Buku')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow-lg border-0 rounded-4">

                <div class="card-header bg-primary text-white text-center py-4 rounded-top-4">

                    <h3 class="mb-1">
                        <i class="bi bi-book-half me-2"></i>
                        Tambah Buku
                    </h3>

                    <p class="mb-0">
                        Lengkapi data buku yang akan ditambahkan ke katalog.
                    </p>

                </div>

                <div class="card-body p-5">

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

                            <label class="form-label fw-semibold">
                                Judul Buku
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-book"></i>
                                </span>

                                <input
                                    type="text"
                                    name="judul"
                                    class="form-control"
                                    placeholder="Masukkan judul buku"
                                    value="{{ old('judul') }}"
                                    required>

                            </div>

                        </div>

                        {{-- Penulis --}}
                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Penulis
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-person-fill"></i>
                                </span>

                                <select
                                    name="author_id"
                                    class="form-select"
                                    required>

                                    <option value="">-- Pilih Penulis --</option>

                                    @foreach($authors as $author)

                                        <option
                                            value="{{ $author->id }}"
                                            {{ old('author_id') == $author->id ? 'selected' : '' }}>

                                            {{ $author->nama }}

                                        </option>

                                    @endforeach

                                </select>

                            </div>

                        </div>

                        {{-- Kategori --}}
                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Kategori
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-tags-fill"></i>
                                </span>

                                <select
                                    name="category_id"
                                    class="form-select"
                                    required>

                                    <option value="">-- Pilih Kategori --</option>

                                    @foreach($categories as $category)

                                        <option
                                            value="{{ $category->id }}"
                                            {{ old('category_id') == $category->id ? 'selected' : '' }}>

                                            {{ $category->nama }}

                                        </option>

                                    @endforeach

                                </select>

                            </div>

                        </div>

                        {{-- Upload Cover --}}
                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Upload Cover Buku
                            </label>

                            <input
                                type="file"
                                name="gambar"
                                class="form-control"
                                accept=".jpg,.jpeg,.png"
                                required>

                            <small class="text-muted">

                                Format JPG, JPEG, PNG (Maksimal 2 MB)

                            </small>

                        </div>

                        <div class="d-flex justify-content-end gap-2">

                            <a
                                href="{{ route('books.index') }}"
                                class="btn btn-outline-secondary px-4">

                                <i class="bi bi-arrow-left"></i>

                                Kembali

                            </a>

                            <button
                                type="submit"
                                class="btn btn-primary px-4">

                                <i class="bi bi-check-circle-fill"></i>

                                Simpan Buku

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection