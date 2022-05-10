<?php

namespace App\Http\Controllers\Admin\Blog;


use App\Http\Requests\AdminBlogCourseCreateRequest;
use App\Http\Requests\AdminBlogCourseEditRequest;
use App\Models\Blog\BlogCategory;
use App\Models\Blog\BlogCourse;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;

class CourseController extends BaseController
{

    public function index()
    {
        $courses = BlogCourse::with('category')
                                ->orderBy('id')
                                ->paginate(8);
        $title = __('admin/blog/courses/core.index');
        return view('admin.blog.courses.index', compact('title', 'courses'));
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $categories = BlogCategory::get(['id','title']);
        $courseLastId = BlogCourse::orderBy('id', 'desc')->first()->id;
        $title = __('admin/blog/courses/core.create');
        return view('admin.blog.courses.create', compact('title', 'categories', 'courseLastId'));
    }


    public function store(AdminBlogCourseCreateRequest $request)
    {
        $data = $request->validated();

        if(!isset($data['is_published'])) {
            $data['is_published'] = false;
        }

        if($data['is_published'] == 1) {
            $data['published_at'] = Date::now()->toDateTimeString();
        }

        $data['slug'] = Str::slug($data['title']);

        $item = new BlogCourse($data);
        $result = $item->fill($data)->save();

        if ($result) {
            return redirect()->route('admin.blog.courses.index')
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
        $course = BlogCourse::with('category')->find($id);
        $title = __('admin/blog/courses/core.show');

        return view('admin.blog.courses.show', compact('title', 'course'));
    }


    public function edit($id)
    {
        $course = BlogCourse::find($id);
        $categories = BlogCategory::get(['id','title']);

        $title = __('admin/blog/courses/core.edit');
        return view('admin.blog.courses.edit', compact('course','title', 'categories'));
    }


    /**
     * @param AdminBlogCourseEditRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AdminBlogCourseEditRequest $request, $id)
    {
        $data = $request -> validated();

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        if(!isset($data['is_published'])) {
            $data['is_published'] = false;
            $data['published_at'] = null;
        } else {
            $data['published_at'] = Date::now()->toDateTimeString();
        }

        $course = BlogCourse::find($id);

        $result = $course->fill($data)->save();

        if($result) {
            return redirect()
                ->route('admin.blog.courses.index')
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
        $course = BlogCourse::find($id);
        $result = $course->delete();

        if($result) {
            return redirect()
                ->route('admin.blog.courses.index')
                ->with(['success'=>__('validation.msg.success_delete')]);
        } else {
            return redirect()
                ->route('admin.blog.courses.index')
                ->with(['error'=>__('validation.msg.error')]);
        }
    }
}
