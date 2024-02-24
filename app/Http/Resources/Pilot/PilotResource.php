<?php

namespace App\Http\Resources\Pilot;

use App\Http\Resources\Country\CountryResource;
use App\Http\Resources\Team\TeamResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PilotResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'img' => $this->img,
            'team' => TeamResource::make($this->team),
            'country' => CountryResource::make($this->country),
            'grand_prix_result' => $this->GrandPrixResult,
            'all_pts' => $this->AllPts,
        ];
    }
}
