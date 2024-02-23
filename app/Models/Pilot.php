<?php

namespace App\Models;

use App\Services\Pts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    use HasFactory;

    protected $table = 'pilots';
    protected $guarded = false;

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id', 'id');
    }

    public function getAllPtsAttribute()
    {
        return Pts::getAllPts('pilot_id', $this->id);
    }

}
