<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_category extends Model
{
    use HasFactory;
    protected $table = 'post_categories';
    protected $fillable = [
        'categories_id',
        'post_id',
    ];
}
