<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\EpisodioResource;
use App\Models\Episodio;

class PersonajeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $collection = collect($this->episodio);
        return [
            'nombre' => $this->nombre,
            'especie' => $this->especie,
            'genero' => $this->genero,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'episodios' =>EpisodioResource::collection($collection),
          ];
    }
}
