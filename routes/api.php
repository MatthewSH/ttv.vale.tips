<?php

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

Route::get('category', function() {
    return app('rinvex.categories.category')->get()->toTree();
});

Route::get('category/{category}', function(\Rinvex\Categories\Models\Category $category) {
    return [
        'category' => $category,
        'tips' => \App\Http\Resources\TipResource::collection($category->entries(\App\Models\Tip::class)->get())
    ];
});

Route::get('tip/{tip}', function(\App\Models\Tip $tip) {
    return new \App\Http\Resources\TipResource($tip);
});