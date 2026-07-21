<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Menampilkan semua data penulis (REST API)
     */
    public function index()
    {
        $authors = Author::orderBy('nama', 'asc')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data penulis berhasil diambil.',
            'data' => $authors
        ], 200);
    }
}