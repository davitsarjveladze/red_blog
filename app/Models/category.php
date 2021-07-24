<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = ['parent_id','title'];

    public function postsId()
    {
        return $this->hasMany(post_category::class,'categories_id')
            ->select('post_id');
    }
}
