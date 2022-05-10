<div class="bg-gray-800 py-10 px-10 divide-y divide-gray-100">
    <div>
        <h2 class="bg-gray-500 w-[25%] py-2 px-2">{{__('admin/info.main')}}</h2>
    </div>

    <div class="pt-10">
        <div class="mb-10">
            <label for="category_id" class="block mb-2 text-sm font-medium text-white dark:text-gray-400">{{__('admin/blog/courses/create.category')}}</label>
            <select id="category_id" name="category_id" class="mb-10 bg-gray-500 border border-gray-700 text-white text-sm rounded-lg  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5W bg-arrow-down">
                @foreach($categories as $category)

                    <option class="bg-cyan-900" value="{{$category->id}}"
                            @if($category->id == 1) selected @endif>
                        {{$category->title}}
                    </option>
                @endforeach
            </select>
        </div>


        <div class="mb-10">
            <label for="title" class="block mb-2 text-sm font-medium text-white dark:text-gray-300">{{__('admin/blog/courses/create.title')}}</label>
            <input type="text" id="title" name="title" value="{{old('title')}}" class="bg-gray-500 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-10">
            <label for="description" class="block mb-2 text-sm font-medium text-white dark:text-gray-400">{{__('admin/blog/courses/create.description')}}</label>
            <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-white bg-gray-500 rounded-lg border border-gray-300 placeholder:text-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700">{{old('description')}}</textarea>
        </div>
        <div class="flex items-center mr-4">
            <input checked id="is_published" name="is_published" type="checkbox" value="{{true}}" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="is_published" class="ml-2 text-sm font-medium text-white dark:text-gray-300">{{__('admin/blog/courses/create.publish')}}</label>
        </div>
    </div>
</div>
