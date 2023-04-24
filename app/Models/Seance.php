<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    protected $fillable = [
        "startDate",
        "endDate",
        "salle_id",
        "activity_id",
        "user_id"
    ];
}
