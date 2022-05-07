<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Requests\AdminBlogCategoryCreateRequest;
use App\Models\Blog\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends BaseController
{

    public function index()
    {
        $categories = BlogCategory::paginate(8);
        $title = __('admin/blog/categories/core.index');
        return view('admin.blog.categories.index', compact('title', 'categories'));
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $categories = BlogCategory::select('id', 'title')->get();
        $title = __('admin/blog/categories/core.create');
        return view('admin.blog.categories.create', compact('title', 'categories'));
    }


    public function store(AdminBlogCategoryCreateRequest $request)
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['title']);

        $item = new BlogCategory($data);
        $result = $item->fill($data)->save();

        if ($result) {
            return redirect()->route('admin.blog.categories.index')
                             ->with('validation.msg.success');
        } else {
            return back()->withErrors(['error'=>__('validation.msg.error')])->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
