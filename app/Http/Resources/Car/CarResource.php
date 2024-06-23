<?php

namespace App\Http\Resources\Car;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'mark_id' => $this->mark_id,
            'model' => $this->model,
            'description' => $this->description,
            'year' => $this->year,
            'price' => $this->price
        ];
    }
}
