<?php

namespace App\Http\Resources\Country;

use App\Models\Pilot;
use App\Models\ResultRace;
use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'title_short' => $this->title_short,
            'img' => $this->img,
        ];
    }
}
