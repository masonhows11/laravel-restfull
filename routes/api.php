<?php



use App\Http\Controllers\versionOne\ArticleController;
use App\Http\Controllers\versionOne\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/






Route::group(['prefix'=>'versionOne'],function ($router){

    $router->get('articles',[ArticleController::class,'index']);
    $router->get('store',[ArticleController::class,'store']);
    $router->get('users',[UserController::class,'index']);
    $router->get('user',[UserController::class,'user']);

});

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
