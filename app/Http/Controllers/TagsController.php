<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tag;
class TagsController extends Controller
{
    public function getAll() {
        return tag::all()->toArray();
    }
}
