<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id'        => $this->id,
            'book_name' => $this->book_name,
            'author'    => $this->author,
            'rate'      => $this->rate,
            'image'     => $this->image ? url($this->image) : null,
        ];
    }
}
