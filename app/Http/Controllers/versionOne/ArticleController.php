<?php

namespace App\Http\Controllers\versionOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    //
    public function index(){

    }

    public function store(Request $request)
    {
        $data = Validator::make((array)$request,[
           'title' => ['min:3','max:50','string','unique:articles,title']
        ]);

        if($data->fails()){
            return response([
               'data'=>[
                   'message' => $data->errors()
               ]
            ],500);
        }
        return response()->json([
           'message' => 'done','status' => 200
        ],200);

    }

}
