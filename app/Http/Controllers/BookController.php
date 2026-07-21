<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Menampilkan daftar buku (Admin)
     */
    public function index(Request $request)
    {
        $query = Book::with(['author', 'category']);

        // Search berdasarkan judul atau penulis
        if ($request->filled('search')) {

            $search = $request->search;

            $query->where(function ($q) use ($search) {

                $q->where('judul', 'like', "%{$search}%")
                  ->orWhereHas('author', function ($author) use ($search) {

                      $author->where('nama', 'like', "%{$search}%");

                  });

            });

        }

        // Filter kategori
        if ($request->filled('category')) {

            $query->whereHas('category', function ($q) use ($request) {

                $q->where('id', $request->category);

            });

        }

        // Sorting
        if ($request->filled('sort')) {

            if ($request->sort == 'judul_asc') {

                $query->orderBy('judul', 'asc');

            } elseif ($request->sort == 'judul_desc') {

                $query->orderBy('judul', 'desc');

            }

        } else {

            $query->orderBy('judul', 'asc');

        }

        // Pagination
        $books = $query->paginate(8)->withQueryString();

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
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $namaGambar = time() . '.' . $request->file('gambar')->extension();

        $request->file('gambar')->storeAs(
            'books',
            $namaGambar,
            'public'
        );

        Book::create([
            'judul' => $request->judul,
            'author_id' => $request->author_id,
            'category_id' => $request->category_id,
            'gambar' => $namaGambar,
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
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $namaGambar = $book->gambar;

        if ($request->hasFile('gambar')) {

            if (
                $book->gambar &&
                Storage::disk('public')->exists('books/' . $book->gambar)
            ) {

                Storage::disk('public')->delete('books/' . $book->gambar);

            }

            $namaGambar = time() . '.' . $request->file('gambar')->extension();

            $request->file('gambar')->storeAs(
                'books',
                $namaGambar,
                'public'
            );
        }

        $book->update([
            'judul' => $request->judul,
            'author_id' => $request->author_id,
            'category_id' => $request->category_id,
            'gambar' => $namaGambar,
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
        if (
            $book->gambar &&
            Storage::disk('public')->exists('books/' . $book->gambar)
        ) {

            Storage::disk('public')->delete('books/' . $book->gambar);

        }

        $book->delete();

        return redirect()
            ->route('books.index')
            ->with('success', 'Buku berhasil dihapus.');
    }
}