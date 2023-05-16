<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "nom",
        "prenom",
        "numTel",
        "numMobile",
        "adresse",
        "facebook",
        "instagram",
        "cin",
        "date_naissance",
        "email",
        "role"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function seances(){
        return $this->hasMany(Seance::class);
    }

    public function abonnements(){
        return $this->belongsToMany(Abonnement::class, 'users_abonnements', 'user_id', 'abonnement_id');
    }

    public function competitions(){
        return $this->belongsToMany(Competition::class, 'user_competitions', 'user_id', 'competition_id');
    }

    public function isAdmin(){
        return str_contains(Auth::user()->role, 'ROLE_ADMIN');
    }

    public function isTrainer(){
        return str_contains(Auth::user()->role, 'ROLE_ENTRAINEUR');
    }
}
