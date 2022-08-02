<div class="bg-gray-800 py-10 px-10 divide-y divide-gray-100">
    <div>
        <h2 class="bg-gray-500 w-[32%] py-2 px-2">{{__('admin/info.main')}}</h2>
    </div>

    <div class="pt-10">
        <div class="mb-10">
            <label for="category_id" class="block mb-2 text-sm font-medium text-white dark:text-gray-400">{{__('admin/blog/modules/edit.category')}}</label>
            <select id="category_id" name="category_id" class="mb-10 bg-gray-500 border border-gray-700 text-white text-sm rounded-lg  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5W bg-arrow-down">
                @foreach($categories as $category)

                    <option class="bg-cyan-900" value="{{$category->id}}"
                            @if($category->id == $module->category_id) selected @endif>
                        {{$category->title}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-10">
            <label for="course_id" class="block mb-2 text-sm font-medium text-white dark:text-gray-400">{{__('admin/blog/modules/edit.course')}}</label>
            <select id="course_id" name="course_id" class="mb-10 bg-gray-500 border border-gray-700 text-white text-sm rounded-lg  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5W bg-arrow-down">
                @foreach($courses as $course)

                    <option class="bg-cyan-900" value="{{$course->id}}"
                            @if($course->id == $module->module_id) selected @endif>
                        {{$course->title}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-10">
            <label for="title" class="block mb-2 text-sm font-medium text-white dark:text-gray-300">{{__('admin/blog/modules/edit.title')}}</label>
            <input type="text" id="title" name="title" value="{{$module->title}}" class="bg-gray-500 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-10">
            <label for="slug" class="block mb-2 text-sm font-medium text-white dark:text-gray-300">{{__('admin/blog/modules/edit.slug')}}</label>
            <input type="text" id="slug" name="slug" value="{{$module->slug}}" class="bg-gray-500 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-10">
            <label for="description" class="block mb-2 text-sm font-medium text-white dark:text-gray-400">{{__('admin/blog/modules/edit.description')}}</label>
            <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-white bg-gray-500 rounded-lg border border-gray-300 placeholder:text-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700">{{$module->description}}</textarea>
        </div>
    </div>
</div>
