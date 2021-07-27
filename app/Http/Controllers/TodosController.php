<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\Todos;
use Illuminate\Support\Facades\Auth;

class TodosController extends Controller
{
    //
    function getAll() {
        return response()->json(Todos::where('user_id','=',1)
            ->orderBy('order','asc')->get());
    }
    function insert(Request $request) {
        $todos = new Todos;
        $data = $request->all();
        $todos->title = $data['title'];
        $todos->status = 0;
        $todos->order = $data['order'];
        $todos->user_id = 1;
        if ($todos->save())
            return response()->json(['id' => $todos->id],201);
        return response()->json([],502);
    }
    function update(Request $request) {
        return Todos::where('id',$request->input('id'))
                ->update($request->all());
    }
    function delete(Request $request) {
        $todos = new Todos();
        $todos->whereIn('id',json_decode($request->input('ides')))->delete();
        return $todos->delete();

    }
}
