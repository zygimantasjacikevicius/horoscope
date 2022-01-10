<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    public function getZodiac()
    {
        return $this->belongsTo(Zodiac::class, 'zodiac_id', 'id');
    }
}
