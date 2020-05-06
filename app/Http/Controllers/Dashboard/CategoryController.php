<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategory;
use Illuminate\Http\Request;
use Rinvex\Categories\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard.categories.index', [
            'categories' => app('rinvex.categories.category')->get()->toTree(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('dashboard.categories.create', [
            'categories' => app('rinvex.categories.category')->get()->toTree(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategory $request)
    {
        $attributes = [
            'name' => $request->get('name')
        ];

        if ($request->get('parent') > 0) {
            $category = app('rinvex.categories.category')->create($attributes, app('rinvex.categories.category')->where('id', $request->get('parent'))->firstOrFail());
        } else {
            $category = app('rinvex.categories.category')->create($attributes);
        }

        return redirect()->route('dashboard.categories.show', ['category' => $category->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Rinvex\Categories\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('dashboard.categories.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Rinvex\Categories\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Rinvex\Categories\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Rinvex\Categories\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
