<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apicontroller;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("api/{id?}",[apicontroller::class, "indexapi"]);

Route::POST("add",[apicontroller::class, "apiadd"]);

Route::PUT("update",[apicontroller::class,"apiupdate"]);

Route::DELETE("delete/{id}",[apicontroller::class,"apidelete"]);