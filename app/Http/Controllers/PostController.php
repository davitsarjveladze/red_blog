<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\post_tag;
use App\Models\category;
use App\Models\post_category;
use App\Http\Requests\PostIndexRequest;
use Laravel\Octane\Facades\Octane;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{

    public function index(PostIndexRequest $request)
    {
        $postsId =[];
        $request = $request->all();

        [$postIdByTag, $postIdByCategory] = Octane::concurrently([
            fn () => isset($request['tag']) ? $this->getPostsIdByTag($request['tag']) : [] ,
            fn () => isset($request['category']) ? $this->getPostsIdByCats($request['category']) : [] ,
        ]);

        if (!empty($postIdByTag) || !empty($postIdByCategory)) {
            $postsId = array_map(function ($data) {
                return $data['post_id'];
            }, array_merge($postIdByTag, $postIdByCategory));
        }
        if (isset($request['tag']) && isset($request['category'])) {
            $postsId = array_values(array_diff_assoc($postsId, array_unique($postsId)));
        }
        $post = post::with('user')
                ->select('id','title','img_url','author_id')
                ->where('published','=',1)
                ->where('id','>' ,0);

        if(isset($request['tag']) || isset($request['category'])) {
            $post->whereIn('id', $postsId);
        }

        return response()->json($post->orderBy('created_at','DESC')
                                        ->paginate(6));

    }

    private function getPostsIdByTag($id) {
        return post_tag::where('tag_id','=',$id)
            ->select('post_id')
            ->get()->toArray();
    }
    private function getPostsIdByCats($id) {
        return post_category::where('categories_id','=',$id)
            ->select('post_id')
            ->get()->toArray();
    }

    public function getCount() {
        return response()->json(['count'=>post::where('published','=',1)->get()->count()]);
    }


    public function getDetail($id) {
        return response()->json([post::where('id','=',$id)->with('user')->get()]);
    }




}
