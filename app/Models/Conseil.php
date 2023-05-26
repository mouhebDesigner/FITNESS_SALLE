<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conseil extends Model
{
    use HasFactory;

    protected $fillable = [
        "label",
        "description",
        "user_id",
        "activity_id"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function activity(){
        return $this->belongsTo(Activity::class);
    }
}
