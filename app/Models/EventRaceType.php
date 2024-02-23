<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRaceType extends Model
{
    use HasFactory;

    protected $table = 'event_race_types';
    protected $guarded = false;
}
