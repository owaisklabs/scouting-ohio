<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoachPlayer extends Model
{
    use HasFactory;
    protected $table = 'coach_players';
    protected $guarded =[];

    const PENDDING = 'PENDDING';
    const ACCEPTED = 'ACCEPTED';
    const DECLINE = 'DECLINE';


}
