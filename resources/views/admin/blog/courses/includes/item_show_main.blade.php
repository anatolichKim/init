<div class="bg-gray-800 py-10 px-10 divide-y divide-gray-100">
    <div>
        <h2 class="bg-gray-500 w-[25%] py-2 px-2">{{__('admin/info.main')}}</h2>
    </div>

    <div class="pt-10 pb-10">
        <div class="block p-6 bg-gray-500 text-white rounded-lg border border-gray-200 shadow-md">
            <p>{{__('admin/blog/courses/show.id')}}: {{$course->id}}</p>
            <p>{{__('admin/blog/courses/show.title')}}: {{$course->title}}</p>
            <p>{{__('admin/blog/courses/show.category')}}: {{$course->category->title}}</p>
            <p>{{__('admin/blog/courses/show.description')}}: {{$course->description}}</p>
            <p>{{__('admin/blog/courses/show.slug')}}: {{$course->slug}}</p>
            @if ($course->is_published === true)
                <p>{{__('admin/blog/courses/show.published_at')}}: {{$course->published_at}}</p>
            @endif
            <p>{{__('admin/blog/courses/show.created_at')}}: {{$course->created_at}}</p>
            <p>{{__('admin/blog/courses/show.updated_at')}}: {{$course->updated_at}}</p>
        </div>

        <div class="bg-gray-800 mt-8 w-full rounded">
            <a href="{{route('admin.blog.courses.index')}}" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{__('admin/info.back')}}</a>
        </div>
    </div>
</div>
