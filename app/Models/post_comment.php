<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_comment extends Model
{
    use HasFactory;
    protected $table = 'post_comments';
    protected $fillable = [
        'post_id',
        'parent_id',
        'user_id',
        'published',
        'content',
    ];
}
