<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BurgerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return
            [
                "id"            => $this->id,
                "name"          => $this->name,
                "description"   => $this->description,
                "regular_price" => $this->regular_price,
                "sale_price"    => $this->sale_price,
                "portion_size"  => $this->portion_size,
                "calories"      => $this->calories,
                "allegies"      => $this->allegies,
                "tags"          => $this->tags,
                "image"         => $this->image,
            ];
    }
}