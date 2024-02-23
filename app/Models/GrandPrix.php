<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrandPrix extends Model
{
    use HasFactory;

    protected $table = 'grand_prixes';
    protected $guarded = false;

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
