<?php

namespace App\Http\Resources\Schedule;

use App\Http\Resources\Event\EventResource;
use App\Http\Resources\GrandPrix\GrandPrixResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ScheduleResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'grand_prix' => GrandPrixResource::make($this->first()->grand_prix),
            'events' => EventResource::collection($this->flatten()),
        ];
    }
}
