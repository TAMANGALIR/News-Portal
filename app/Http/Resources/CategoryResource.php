<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
             "id"=> $this->id,
            "title"=> $this->title,
            "slug"=> $this->instagram_url,
             "meta_keywords"=> $this->meta_keywords,
             "meta_description"=> $this->meta_description,
             "articles"=>  ArticleResource::collection($this->articles),
        ];
    }
}
