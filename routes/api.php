<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\Members;

use App\Http\Controllers\API\Talents;

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

Route::group(["prefix" => "members"], function () {
    // GET /articles: show all articles
    Route::get("", [Members::class, "index"]);
    // POST /articles: create a new article
    Route::post("", [Members::class, "store"]);
// all these routes also have an article ID in the
// end-point, e.g. /articles/8
Route::group(["prefix" => "{member}"], function () {
        // GET /articles/8: show the article
        Route::get("", [Members::class, "show"]);
        // PUT /articles/8: update the article
        Route::put("", [Members::class, "update"]);
        // DELETE /articles/8: delete the article
        Route::delete("", [Members::class, "destroy"]);
    });
});

Route::group(["prefix" => "talents"], function () {
    Route::get("", [Talents::class, "index"]);
    Route::post("", [Talents::class, "store"]);

    Route::group(["prefix" => "{talent}"], function () {
            Route::get("", [Talents::class, "show"]);
            Route::put("", [Talents::class, "update"]);
            Route::delete("", [Talents::class, "destroy"]);
        });
});
