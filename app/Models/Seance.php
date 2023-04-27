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

    public function salle(){
        return $this->belongsTo(Salle::class);
    }
    
    public function activity(){
        return $this->belongsTo(Activity::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
