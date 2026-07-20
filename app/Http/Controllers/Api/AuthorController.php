<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255|unique:authors,nama'
        ]);

        Author::create($request->all());

        return redirect()->route('authors.index')
            ->with('success', 'Penulis berhasil ditambahkan.');
    }

    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        $request->validate([
            'nama' => 'required|max:255|unique:authors,nama,' . $author->id
        ]);

        $author->update($request->all());

        return redirect()->route('authors.index')
            ->with('success', 'Penulis berhasil diperbarui.');
    }

    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('authors.index')
            ->with('success', 'Penulis berhasil dihapus.');
    }
}