<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbonnementActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        "abonnement_id",
        "activity_id"
    ];
}
