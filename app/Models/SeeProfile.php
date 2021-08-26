<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeeProfile extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function users()
    {
        return $this->belongsToMany(User::class,SeeProfile::class,'visiter_id','player_id');
    }
}
