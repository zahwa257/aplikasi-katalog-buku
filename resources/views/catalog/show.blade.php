@extends('layouts.catalog')

@section('title','Detail Buku')

@section('content')

<div class="container py-5">

    <div class="detail-card">

        <div class="detail-image">

            <img
                src="{{ asset('images/'.$book->gambar) }}"
                alt="{{ $book->judul }}">

        </div>

        <div class="detail-content">

            <span class="detail-category">

                {{ $book->category->nama }}

            </span>

            <h1>

                {{ $book->judul }}

            </h1>

            <h5>

                <i class="bi bi-person-fill"></i>

                {{ $book->author->nama }}

            </h5>

            <p>

                Buku ini merupakan salah satu koleksi yang tersedia pada
                aplikasi katalog buku. Informasi yang ditampilkan meliputi
                judul buku, penulis, kategori, dan cover buku.

            </p>

            <div class="mt-4 d-flex gap-3">

                                @auth
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">
                        <i class="bi bi-pencil-fill"></i>
                        Edit Buku
                    </a>
                @endauth

                <a href="{{ route('home') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i>
                    Kembali
                </a>

                <a
                    href="{{ route('books.index') }}"
                    class="btn-cancel">

                    <i class="bi bi-arrow-left"></i>

                    Kembali

                </a>

            </div>

        </div>

    </div>

</div>

@endsection