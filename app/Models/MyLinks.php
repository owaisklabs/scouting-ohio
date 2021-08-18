<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyLinks extends Model
{
    use HasFactory;
    protected $table = 'player_links';
    protected $guarded =[];
}
