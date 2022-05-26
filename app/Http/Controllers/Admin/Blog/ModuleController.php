<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminBlogModuleCreateRequest;
use App\Http\Requests\AdminBlogModuleEditRequest;
use App\Models\Blog\BlogCategory;
use App\Models\Blog\BlogCourse;
use App\Models\Blog\BlogModule;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ModuleController extends BaseController
{
    public function index()
    {
        $modules = BlogModule::with('category', 'course')
            ->orderBy('id')
            ->paginate(8);
        $title = __('admin/blog/modules/core.index');
        return view('admin.blog.modules.index', compact('title', 'modules'));
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $categories = BlogCategory::get(['id','title']);
        $courses = BlogCourse::get(['id', 'title']);
        $moduleLastId = BlogModule::orderBy('id', 'desc')->first()->id;
        $title = __('admin/blog/modules/core.create');
        return view('admin.blog.modules.create', compact('title', 'categories', 'courses', 'moduleLastId'));
    }


    public function store(AdminBlogModuleCreateRequest $request)
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['title']);

        $item = new BlogModule($data);
        $result = $item->fill($data)->save();

        if ($result) {
            return redirect()->route('admin.blog.modules.index')
                ->with(['success' => __('validation.msg.success_add')]);
        } else {
            return back()->withErrors(['error'=>__('validation.msg.error')])->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $module = BlogModule::with('category', 'course')->find($id);
        $title = __('admin/blog/modules/core.show');

        return view('admin.blog.modules.show', compact('title', 'module'));
    }


    public function edit($id)
    {
        $categories = BlogCategory::get(['id','title']);
        $courses = BlogCourse::get(['id', 'title']);
        $module = BlogModule::find($id);

        $title = __('admin/blog/modules/core.edit');
        return view('admin.blog.modules.edit', compact('courses','title', 'categories', 'module'));
    }


    /**
     * @param AdminBlogModuleEditRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AdminBlogModuleEditRequest $request, $id)
    {
        $data = $request -> validated();

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        $module = BlogModule::find($id);

        $result = $module->fill($data)->save();

        if($result) {
            return redirect()
                ->route('admin.blog.modules.index')
                ->with(['success' => __('validation.msg.success_edit')]);
        } else {
            return back()
                ->withErrors(['error'=>__('validation.msg.error')])
                ->withInput();
        }
    }


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $module = BlogModule::find($id);
        $result = $module->delete();

        if($result) {
            return redirect()
                ->route('admin.blog.modules.index')
                ->with(['success'=>__('validation.msg.success_delete')]);
        } else {
            return redirect()
                ->route('admin.blog.modules.index')
                ->with(['error'=>__('validation.msg.error')]);
        }
    }
}
