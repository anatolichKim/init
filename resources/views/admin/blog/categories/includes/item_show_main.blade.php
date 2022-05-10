<div class="bg-gray-800 py-10 px-10 divide-y divide-gray-100">
    <div>
        <h2 class="bg-gray-500 w-[25%] py-2 px-2">{{__('admin/info.main')}}</h2>
    </div>

    <div class="pt-10 pb-10">
        <div class="block p-6 bg-gray-500 text-white rounded-lg border border-gray-200 shadow-md">
            <p>{{__('admin/blog/categories/show.id')}}: {{$category->id}}</p>
            <p>{{__('admin/blog/categories/show.title')}}: {{$category->title}}</p>
            <p>{{__('admin/blog/categories/show.description')}}: {{$category->description}}</p>
            <p>{{__('admin/blog/categories/show.slug')}}: {{$category->slug}}</p>
            <p>{{__('admin/blog/categories/show.created_at')}}: {{$category->created_at}}</p>
            <p>{{__('admin/blog/categories/show.updated_at')}}: {{$category->updated_at}}</p>
        </div>

        <div class="bg-gray-800 mt-8 w-full rounded">
            <a href="{{route('admin.blog.categories.index')}}" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{__('admin/info.back')}}</a>
        </div>
    </div>
</div>
