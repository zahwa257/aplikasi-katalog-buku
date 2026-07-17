<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        return response()->json([
            'success' => true,
            'message' => 'Data penulis berhasil diambil',
            'data' => $authors
        ]);
    }
}