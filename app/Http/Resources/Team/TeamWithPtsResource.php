<?php

namespace App\Http\Resources\Team;

use App\Http\Resources\Country\CountryResource;
use App\Models\Pilot;
use App\Models\ResultRace;
use Illuminate\Http\Resources\Json\JsonResource;

class TeamWithPtsResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'color' => $this->color,
            'country' => CountryResource::make($this->country),
            'all_pts' => $this->AllPts,
            'grand_prix_result' => collect($this->GrandPrixResult),
        ];
    }
}
