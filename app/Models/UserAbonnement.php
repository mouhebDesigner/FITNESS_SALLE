<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAbonnement extends Model
{
    use HasFactory;

    protected $fillable = [
        "startDate",
        "endDate",
        "user_id",
        "abonnement_id"
    ];
}
