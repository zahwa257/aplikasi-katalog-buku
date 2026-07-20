<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Menampilkan daftar buku (Admin)
     */
    public function index()
    {
        $books = Book::with(['author', 'category'])->get();
        $categories = Category::all();

        return view('catalog.index', compact('books', 'categories'));
    }

    /**
     * Form tambah buku
     */
    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();

        return view('catalog.create', compact('authors', 'categories'));
    }

    /**
     * Simpan buku baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',
            'gambar' => 'required',
        ]);

        Book::create([
            'judul' => $request->judul,
            'author_id' => $request->author_id,
            'category_id' => $request->category_id,
            'gambar' => $request->gambar,
        ]);

        return redirect()
            ->route('books.index')
            ->with('success', 'Buku berhasil ditambahkan.');
    }

    /**
     * Detail buku
     */
    public function show(Book $book)
    {
        return view('catalog.show', compact('book'));
    }

    /**
     * Form edit buku
     */
    public function edit(Book $book)
    {
        $authors = Author::all();
        $categories = Category::all();

        return view('catalog.edit', compact('book', 'authors', 'categories'));
    }

    /**
     * Update buku
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',
            'gambar' => 'required',
        ]);

        $book->update([
            'judul' => $request->judul,
            'author_id' => $request->author_id,
            'category_id' => $request->category_id,
            'gambar' => $request->gambar,
        ]);

        return redirect()
            ->route('books.index')
            ->with('success', 'Buku berhasil diperbarui.');
    }

    /**
     * Hapus buku
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()
            ->route('books.index')
            ->with('success', 'Buku berhasil dihapus.');
    }
}