<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'schedules';
    protected $guarded = false;

    public function grand_prix()
    {
        return $this->belongsTo(GrandPrix::class, 'grand_prix_id', 'id');
    }

    public function event()
    {
        return $this->belongsTo(EventRaceType::class, 'event_id', 'id');
    }

    public function events()
    {
        return Schedule::where('grand_prix_id', '=', $this->grand_prix_id)->get();
    }

}
