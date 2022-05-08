<div class="flex flex-row justify-between">
    <div class="mt-10">
        <a href="{{route('admin.blog.categories.create')}}"
           class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">{{__('admin/blog/categories/index.create')}}</a>
    </div>
    <div class="mb-5">
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select
            an option</label>
        <select id="countries"
                class="bg-slate-700 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option selected>{{__('admin/blog/categories/index.option_selected')}}</option>
            <option value="id">{{__('admin/blog/categories/index.option_id')}}</option>
            <option value="parent_id">{{__('admin/blog/categories/index.option_parent')}}</option>
            <option value="title">{{__('admin/blog/categories/index.option_title')}}</option>
        </select>
    </div>
</div>
