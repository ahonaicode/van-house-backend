<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use HasFactory;
    public $timestamps = false;

    protected $fillable =[
        'title','date','description','link', 'images', 'details'
    ];

    protected $casts =[
        'images'=>'array',
        'details'=>'array',
    ];

    public static function boot()
    {
        // call parent boot method
        parent::boot();
        // set created at to now
        static::creating(function($post){
            $post->created_at = $post->freshTimestamp();
        });
    }
    public function beenShortlistedBy()
    {
        return $this->belongsToMany(User::class, 'shortlists', 'post_id', 'user_id');
    }
}
