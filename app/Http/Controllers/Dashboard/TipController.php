<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTip;
use App\Models\Tip;
use Illuminate\Http\Request;
use Rinvex\Categories\Models\Category;

class TipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Category $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Category $category)
    {
        return view('dashboard.categories.tips.create', [
            'category' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateTip $request
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateTip $request, Category $category)
    {
        $tip = Tip::create([
            'title' => $request->get('title'),
            'short' => $request->get('short'),
            'long' => $request->get('long'),
            'visible' => $request->get('visible'),
            'user_id' => $request->session()->get('ttv_user')->id
        ]);

        $tip->attachCategories($category);

        return redirect()->route('dashboard.categories.show', [
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function edit(Tip $tip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tip $tip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tip  $tip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tip $tip)
    {
        //
    }
}
