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
            "title_track" => $this->track->title,
            "img" => $this->track->img,
            "country" => CountryResource::make($this->country),
        ];
    }
}
