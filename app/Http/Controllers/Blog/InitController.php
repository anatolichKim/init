<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Blog\BaseController;
use App\Models\Blog\BlogCourse;
use App\Models\Blog\BlogModule;
use App\Models\Blog\BlogPost;
use Illuminate\Http\Request;

class InitController extends BaseController
{

    public function index()
    {
        $whereTitle = '%Вкатиться в IT%';
        $course = BlogCourse::where('title', 'like', $whereTitle)->first();
        $modules = BlogModule::where('course_id', $course->id)->get();

        $moduleIds = [];

        foreach($modules as $module) {
            $moduleIds[] = $module->id;
        }

        $posts = BlogPost::with('module')->whereIn('module_id', $moduleIds)
            ->orderBy('module_id')
            ->orderBy('id')
            ->get();

        $firstPost = $posts[0];

        return view('blog.init.index', compact('course', 'modules', 'posts', 'firstPost'));
    }

    public function show($id)
    {
        $whereTitle = '%Вкатиться в IT%';
        $course = BlogCourse::where('title', 'like', $whereTitle)->first();
        $modules = BlogModule::where('course_id', $course->id)->get();

        $moduleIds = [];

        foreach($modules as $module) {
            $moduleIds[] = $module->id;
        }

        $posts = BlogPost::with('module')->whereIn('module_id', $moduleIds)
            ->orderBy('module_id')
            ->orderBy('id')
            ->get();

        $post = BlogPost::find($id);

        return view('blog.init.show', compact('course', 'modules', 'posts', 'post'));
    }

}
