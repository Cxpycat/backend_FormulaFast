<?php

namespace App\Models;

use App\Services\Pts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';
    protected $guarded = false;
    private $POINTS_GRAND_PRIX = [1 => 25, 2 => 18, 3 => 15, 4 => 12, 5 => 10, 6 => 8, 7 => 6, 8 => 4, 9 => 2, 10 => 1];


    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function getAllPtsAttribute(): int
    {
        return Pts::getAllPts('team_id', $this->id);

    }

    public function getGrandPrixResultAttribute(): array
    {
        return Pts::getResultRaces('team_id', $this->id);
    }

}
