<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Requests\AdminBlogCategoryCreateRequest;
use App\Http\Requests\AdminBlogCategoryEditRequest;
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
                             ->with(['success' => __('validation.msg.success_add')]);
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


    public function edit($id)
    {
        $category = BlogCategory::find($id);
        $categoryList = BlogCategory::select('id', 'title')->get();

        $title = __('admin/blog/categories/core.edit');
        return view('admin.blog.categories.edit', compact('category','title', 'categoryList'));
    }


    /**
     * @param AdminBlogCategoryEditRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AdminBlogCategoryEditRequest $request, $id)
    {
        $data = $request -> validated();

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        $category = BlogCategory::find($id);

        $result = $category->fill($data)->save();

        if($result) {
            return redirect()
                ->route('admin.blog.categories.index')
                ->with(['success' => __('validation.msg.success_edit')]);
        } else {
            return back()
                ->withErrors(['error'=>__('validation.msg.error')])
                ->withInput();
        }

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
