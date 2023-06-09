<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IspitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'predmet_id' => $this->resource->predmet,
            'student_id' => $this->resource->student,
            'Rezultat' => $this->resource->Rezultat,
        ];
    }
}