<?php

namespace App\Http\Resources\GrandPrix;

use App\Http\Resources\Country\CountryResource;
use App\Http\Resources\Team\TeamResource;
use Illuminate\Http\Resources\Json\JsonResource;

class GrandPrixResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "title_track" => $this->title_track,
            "img" => $this->img,
            "country" => CountryResource::make($this->country),
        ];
    }
}
