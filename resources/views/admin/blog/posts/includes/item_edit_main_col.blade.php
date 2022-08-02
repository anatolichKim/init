<div class="bg-gray-800 py-10 px-10 divide-y divide-gray-100">
    <div>
        <div id="accordion-collapse-edit" data-accordion="collapse" class="h-10 flex flex-column align-center" data-active-classes="text-white bg-gray-500">
            <h2 id="accordion-collapse-edit-heading-1" class="flex">
                <button type="button" class="flex justify-between items-center p-5 font-medium text-left" data-accordion-target="#accordion-collapse-edit-body-1" aria-expanded="true" aria-controls="accordion-collapse-edit-body-1">
                    <span class="px-2 ">{{__('admin/info.main')}}</span>
                </button>
            </h2>
            <h2 id="accordion-collapse-edit-heading-2" class="flex">
                <button type="button" class="flex justify-between items-center p-5 font-medium text-left" data-accordion-target="#accordion-collapse-edit-body-2" aria-expanded="false" aria-controls="accordion-collapse-edit-body-2">
                    <span class="px-2">{{__('admin/info.post')}}</span>
                </button>
            </h2>
        </div>
    </div>

    <div class="py-10">
        <div id="accordion-collapse-edit-body-1" class="hidden block text-white rounded-lg" aria-labelledby="accordion-collapse-edit-heading-1">
            <div class="mb-10">
                <label for="category_id" class="block mb-2 text-sm font-medium text-white dark:text-gray-400">{{__('admin/blog/posts/edit.category')}}</label>
                <select id="category_id" name="category_id" class="mb-10 bg-gray-500 border border-gray-300 text-white text-sm rounded-lg  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5W bg-arrow-down">
                    @foreach($categories as $category)

                        <option class="bg-cyan-900" value="{{$category->id}}"
                                @if($category->id == $post->category_id) selected @endif>
                            {{$category->title}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-10">
                <label for="course_id" class="block mb-2 text-sm font-medium text-white dark:text-gray-400">{{__('admin/blog/posts/edit.course')}}</label>
                <select id="course_id" name="course_id" class="mb-10 bg-gray-500 border border-gray-300 text-white text-sm rounded-lg  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5W bg-arrow-down">
                    @foreach($courses as $course)

                        <option class="bg-cyan-900" value="{{$course->id}}"
                                @if($course->id == $post->course_id) selected @endif>
                            {{$course->title}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-10">
                <label for="module_id" class="block mb-2 text-sm font-medium text-white dark:text-gray-400">{{__('admin/blog/posts/edit.module')}}</label>
                <select id="module_id" name="module_id" class="mb-10 bg-gray-500 border border-gray-300 text-white text-sm rounded-lg  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5W bg-arrow-down">
                    @foreach($modules as $module)

                        <option class="bg-cyan-900" value="{{$module->id}}"
                                @if($module->id == $post->module_id) selected @endif>
                            {{$module->title}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-10">
                <label for="title" class="block mb-2 text-sm font-medium text-white dark:text-gray-300">{{__('admin/blog/posts/edit.title')}}</label>
                <input type="text" id="title" name="title" value="{{$post->title}}" class="bg-gray-500 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-10">
                <label for="slug" class="block mb-2 text-sm font-medium text-white dark:text-gray-300">{{__('admin/blog/posts/edit.slug')}}</label>
                <input type="text" id="slug" name="slug" value="{{$post->slug}}" class="bg-gray-500 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-10">
                <label for="description" class="block mb-2 text-sm font-medium text-white dark:text-gray-300">{{__('admin/blog/posts/edit.description')}}</label>
                <input type="text" id="description" name="description" value="{{$post->description}}" class="bg-gray-500 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="flex items-center mr-4">
                <input checked id="is_published" name="is_published" type="checkbox" value="{{$post->is_published}}" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="is_published" class="ml-2 text-sm font-medium text-white dark:text-gray-300">{{__('admin/blog/posts/edit.publish')}}</label>
            </div>
        </div>

        <div id="accordion-collapse-edit-body-2" aria-labelledby="accordion-collapse-edit-heading-2" class="hidden block p-6 text-white rounded-lg">
            <div class="mb-10">
                <textarea id="text_display" class="hidden">{{$post->text_markdown }}</textarea>
                <textarea id="editorUpdate"></textarea>
                <input type="hidden" name="text_markdown" id="text_markdown">
            </div>
        </div>
    </div>
</div>
