<?php

namespace App\Http\Resources\Race;

use App\Models\Country;
use App\Models\Track;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class RaceResource extends JsonResource
{

    public function toArray($request)
    {
        $track = Track::find($this->track_id);
        $country = Country::find($track->country_id);

        return [
            'id' => $this->id,
            'date' => Carbon::parse($this->date),
            'track_title' => $track->title,
            'track_img' => $track->img,
            'country_title' => $country->title,
            'country_img' => $country->img,
            'first_event' => 'Первая практика',
            'first_event_time' => Carbon::parse($this->first_event_time),
            'second_event' => 'Вторая практика',
            'second_event_time' => Carbon::parse($this->second_event_time),
            'third_event' => 'Третья практика',
            'third_event_time' => Carbon::parse($this->third_event_time),
            'qualification_event' => 'Квалификация',
            'qualification_event_time' => Carbon::parse($this->qualification_event_time),
            'race_event' => 'Гонка',
            'race_event_time' => Carbon::parse($this->race_event_time),
        ];
    }
}
