<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Player_tournament extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'player_id',
        'tournament_id',
    ];

    protected $hidden = [];

    protected $casts = [];
}
