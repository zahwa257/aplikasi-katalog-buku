<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    // Menampilkan semua buku
    public function index(Request $request)
    {
        $query = Book::with(['author', 'category']);

        if ($request->filled('search')) {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('nama', $request->category);
            });
        }

        $books = $query->paginate(10);

        $data = $books->getCollection()->map(function ($book) {
            return [
                'id'          => $book->id,
                'judul'       => $book->judul,
                'gambar'      => asset('images/' . $book->gambar),

                'author'      => $book->author?->nama,
                'author_id'   => $book->author_id,

                'category'    => $book->category?->nama,
                'category_id' => $book->category_id,
            ];
        });

        return response()->json([
            'status'       => true,
            'message'      => 'Berhasil mengambil data buku',
            'current_page' => $books->currentPage(),
            'last_page'    => $books->lastPage(),
            'per_page'     => $books->perPage(),
            'total'        => $books->total(),
            'data'         => $data
        ]);
    }

    // Detail buku
    public function show($id)
    {
        $book = Book::with(['author', 'category'])->find($id);

        if (!$book) {
            return response()->json([
                'status' => false,
                'message' => 'Buku tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Detail buku berhasil diambil',
            'data' => [
                'id'          => $book->id,
                'judul'       => $book->judul,
                'gambar'      => asset('images/' . $book->gambar),

                'author'      => $book->author?->nama,
                'author_id'   => $book->author_id,

                'category'    => $book->category?->nama,
                'category_id' => $book->category_id,
            ]
        ]);
    }

    // Tambah buku
    public function store(StoreBookRequest $request)
    {
        $validated = $request->validated();

        $book = Book::create($validated);
        $book->load(['author', 'category']);

        return response()->json([
            'status' => true,
            'message' => 'Buku berhasil ditambahkan',
            'data' => [
                'id'          => $book->id,
                'judul'       => $book->judul,
                'gambar'      => asset('images/' . $book->gambar),

                'author'      => $book->author?->nama,
                'author_id'   => $book->author_id,

                'category'    => $book->category?->nama,
                'category_id' => $book->category_id,
            ]
        ], 201);
    }

    // Update buku
    public function update(UpdateBookRequest $request, $id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'status' => false,
                'message' => 'Buku tidak ditemukan'
            ], 404);
        }

        $validated = $request->validated();

        $book->update($validated);
        $book->load(['author', 'category']);

        return response()->json([
            'status' => true,
            'message' => 'Buku berhasil diperbarui',
            'data' => [
                'id'          => $book->id,
                'judul'       => $book->judul,
                'gambar'      => asset('images/' . $book->gambar),

                'author'      => $book->author?->nama,
                'author_id'   => $book->author_id,

                'category'    => $book->category?->nama,
                'category_id' => $book->category_id,
            ]
        ]);
    }

    // Hapus buku
    public function destroy($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'status' => false,
                'message' => 'Buku tidak ditemukan'
            ], 404);
        }

        $book->delete();

        return response()->json([
            'status' => true,
            'message' => 'Buku berhasil dihapus'
        ]);
    }
}