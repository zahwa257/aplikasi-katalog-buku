<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->id,
            'judul'       => $this->judul,
            'gambar'      => asset('images/' . $this->gambar),

            'author'      => $this->author?->nama,
            'author_id'   => $this->author_id,

            'category'    => $this->category?->nama,
            'category_id' => $this->category_id,
        ];
    }
}