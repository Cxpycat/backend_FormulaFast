<?php

namespace App\Http\Resources\Event;

use App\Http\Resources\Country\CountryResource;
use App\Http\Resources\Team\TeamResource;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'title' => $this->event->title,
            'event_time' => $this->event_time,
        ];
    }
}
