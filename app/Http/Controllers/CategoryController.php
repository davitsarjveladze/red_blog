<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use function PHPUnit\Framework\isNull;

class CategoryController extends Controller
{
    public function getAll() {
        $rawCategory = category::orderBy('parent_id', 'ASC')->get()->toArray();
        $categories = [];

        foreach ($rawCategory as $cat) {
            $categories[$cat['parent_id'] ?: 0][] = $cat;
        }

        $tree = [];
        foreach ($categories[0] as $cats)
            $tree[$cats['id']] = $this->goChildrenToParents($categories, array($cats));

        return response()->json($tree);
    }

    private function goChildrenToParents(&$list, $parent): array
    {
        $tree = [];
        foreach ($parent as $k=>$value){
            if(isset($list[$value['id']])){
                $value['children'] = $this->goChildrenToParents($list, $list[$value['id']]);
            }
            $tree[] = $value;
        }
        return $tree;
    }

}
