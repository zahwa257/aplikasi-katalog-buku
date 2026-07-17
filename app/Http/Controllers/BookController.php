<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['author','category'])->get();

        return view('catalog.index', compact('books'));
    }

    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();

        return view('catalog.create', compact('authors','categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'author_id' => 'required',
            'category_id' => 'required',
            'gambar' => 'required'
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')
            ->with('success','Buku berhasil ditambahkan.');
    }

    public function show(Book $book)
    {
        return view('catalog.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $authors = Author::all();
        $categories = Category::all();

        return view('catalog.edit', compact('book','authors','categories'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'author_id' => 'required',
            'category_id' => 'required',
            'gambar' => 'required'
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')
            ->with('success','Buku berhasil diperbarui.');
    }

    public function destroy(Book $book)
{
    $book->delete();

    return redirect()
        ->route('books.index')
        ->with('success', 'Buku berhasil dihapus.');
}
}