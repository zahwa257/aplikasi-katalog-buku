<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Menampilkan semua kategori (REST API)
     */
    public function index()
    {
        $categories = Category::orderBy('nama', 'asc')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data kategori berhasil diambil.',
            'data' => $categories
        ], 200);
    }
}