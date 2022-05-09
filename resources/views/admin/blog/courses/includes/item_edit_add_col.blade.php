<div class="bg-gray-800 py-6 px-5 mb-2 w-full rounded">
    <button type="submit" class=" text-white bg-yellow-500 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{__('admin/blog/categories/edit.submit')}}</button>
</div>

<div class="bg-gray-800 mt-10 py-6 px-5 mb-2 w-full rounded">
    <p>{{__('admin/blog/categories/edit.id')}} {{$category->id}}</p>
    <p>{{__('admin/blog/categories/edit.created_at')}} {{$category->created_at}}</p>
    <p>{{__('admin/blog/categories/edit.updated_at')}} {{$category->updated_at}}</p>
</div>
