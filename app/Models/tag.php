<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;
    protected $table = 'tags';
    protected $fillable = [
        'name',
    ];

    public function postsId() {
        return $this->hasMany(post_tag::class,'tag_id')
            ->select('post_id');
    }
}
