<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = [
        "label",
        "startDate",
        "endDate",
        "activity_id",
    ];

    public function activity(){
        return $this->belongsTo(Activity::class);
    }

    public function users(){
        return $this->belongsToMany(User::class, 'user_competitions', 'competition_id', 'user_id');
    }

    
}
