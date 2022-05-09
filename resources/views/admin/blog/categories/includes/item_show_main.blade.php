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
    </div>
</div>
