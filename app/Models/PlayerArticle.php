<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerArticle extends Model
{
    use HasFactory;
    protected $table = 'player_articles';
    protected $guarded =[];
}
