<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerEvaluation extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'player_evaluations';
}
