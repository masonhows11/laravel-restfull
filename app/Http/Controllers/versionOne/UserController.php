<?php

namespace App\Http\Controllers\versionOne;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    //    public function index()
    //    {
    //        $users = User::all();
    //        $users = User::query()->where('id', 4)->first();
    //        $users = User::query()->paginate(5);
    //        $users = User::query()->take(8)->get();
    //        $users = User::query()->limit(7)->latest()->get();
    //        return response()->json($users);
    //    }

    public function index()
    {
         $users = User::all();
        return new UserResource($users);
    }

    public function user()
    {
        $user = User::query()->limit(1)->first();
        return new UserResource($user);
    }
}