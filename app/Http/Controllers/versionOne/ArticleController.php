<?php

namespace App\Http\Controllers\versionOne;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    //
    public function index(Request $request){

        return response()->json(['data'=>Article::all(),'status'=>200],200);
    }

    public function store(Request $request)
    {
        $data = Validator::make($request->all(),[
           'title' => ['required','min:3','max:50','string','unique:articles,title']
        ]);

        if($data->fails()){
            return response([
               'data'=>[
                   'message' => $data->errors()
               ]
            ],500);
        }
        Article::create([
            'title' => $request->title,
        ]);
        return response()->json([
           'message' => 'done','status' => 200
        ],200);


    }

}
