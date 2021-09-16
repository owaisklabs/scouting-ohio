<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    public function comments()
    {
        return $this->hasMany(Comment::class,'article_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function likes()
    {
        return $this->hasManyThrough(
            Like::class,
            Comment::class,
            'article_id', // Foreign key on the environments table...
            'comment_id', // Foreign key on the deployments table...
            'id', // Local key on the projects table...
            'id' // Local key on the environments table...
        );
    }
}
