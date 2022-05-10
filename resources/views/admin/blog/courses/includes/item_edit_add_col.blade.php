<div class="bg-gray-800 py-6 px-5 mb-2 w-full rounded">
    <button type="submit" class=" text-white bg-yellow-500 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{__('admin/blog/courses/edit.submit')}}</button>
</div>

<div class="bg-gray-800 mt-10 py-6 px-5 mb-2 w-full rounded">
    <p>{{__('admin/blog/courses/edit.id')}} {{$course->id}}</p>
    @if ($course->is_published === true)
        <p>{{__('admin/blog/courses/edit.published_at')}} {{$course->published_at}}</p>
    @endif
    <p>{{__('admin/blog/courses/edit.created_at')}} {{$course->created_at}}</p>
    <p>{{__('admin/blog/courses/edit.updated_at')}} {{$course->updated_at}}</p>
</div>
