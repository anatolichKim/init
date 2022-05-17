<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Requests\AdminBlogPostCreateRequest;
use App\Http\Requests\AdminBlogPostEditRequest;
use App\Models\Blog\BlogCategory;
use App\Models\Blog\BlogCourse;
use App\Models\Blog\BlogPost;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;

class PostController extends BaseController
{

    public function index()
    {
        $posts = BlogPost::with(['category', 'course'])
            ->orderBy('id')
            ->paginate(8);
        $title = __('admin/blog/posts/core.index');
        return view('admin.blog.posts.index', compact('title', 'posts'));
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {

        $categories = BlogCategory::get(['id','title']);
        $courses = BlogCourse::get(['id', 'title']);
        $postLastId = BlogPost::orderBy('id', 'desc')->first()->id;
        $title = __('admin/blog/posts/core.create');
        return view('admin.blog.posts.create', compact('title', 'categories', 'courses', 'postLastId'));
    }


    public function store(AdminBlogPostCreateRequest $request)
    {

        $data = $request->validated();

        $data['text_html'] = Markdown::convertToHtml($data['text_markdown']);
        if(!isset($data['is_published'])) {
            $data['is_published'] = false;
        }

        if($data['is_published'] == 1) {
            $data['published_at'] = Date::now()->toDateTimeString();
        }

        $data['slug'] = Str::slug($data['title']);
        $item = new BlogPost($data);
        $result = $item->fill($data)->save();

        if ($result) {
            return redirect()->route('admin.blog.posts.index')
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
        $post = BlogPost::with('category', 'course')->find($id);
        $title = __('admin/blog/posts/core.show');
        return view('admin.blog.posts.show', compact('title', 'post'));
    }


    public function edit($id)
    {
        $post = BlogPost::find($id);
        $categories = BlogCategory::get(['id','title']);
        $courses = BlogCourse::get(['id', 'title']);

        $title = __('admin/blog/posts/core.edit');
        return view('admin.blog.posts.edit', compact('post','title', 'categories', 'courses'));
    }


    /**
     * @param AdminBlogPostEditRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AdminBlogPostEditRequest $request, $id)
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

        $data['text_html'] = Markdown::convertToHtml($data['text_markdown']);

        $post = BlogPost::find($id);

        $result = $post->fill($data)->save();

        if($result) {
            return redirect()
                ->route('admin.blog.posts.index')
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
        dd(__METHOD__);

        $post = BlogPost::find($id);
        $result = $post->delete();

        if($result) {
            return redirect()
                ->route('admin.blog.post.index')
                ->with(['success'=>__('validation.msg.success_delete')]);
        } else {
            return redirect()
                ->route('admin.blog.post.index')
                ->with(['error'=>__('validation.msg.error')]);
        }
    }
}
