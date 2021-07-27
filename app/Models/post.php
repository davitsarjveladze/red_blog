<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'author_id',
        'parent_id',
        'title','slug',
        'summary',
        'published',
        'published_at',
        'content',
        'img_url'
    ];

    public function user() {
        return $this->hasOne(User::class,'id','author_id')
            ->select('id','name');
    }
    public function comments() {
        return $this->hasMany(post_comment::class,'post_id');
    }

    public function tag() {
        return $this->hasMany(post_tag::class,'post_id')
            ->select('tag_id');
    }
    public function category() {
        return $this->hasMany(post_category::class,'post_id')
            ->select('categories_id');
    }
}
