<div class="bg-gray-800 pt-10 pb-2 px-10 divide-y divide-gray-100">
    <div>
        <div id="accordion-collapse" data-accordion="collapse" class="h-10 flex flex-column align-center" data-active-classes="text-white bg-gray-500">
            <h2 id="accordion-collapse-heading-1" class="flex">
                    <button type="button" class="flex justify-between items-center p-5 font-medium text-left" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                    <span class="px-2 ">{{__('admin/info.post')}}</span>
                </button>
            </h2>
            <h2 id="accordion-collapse-heading-2" class="flex">
                <button type="button" class="flex justify-between items-center p-5 font-medium text-left" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                    <span class="px-2">{{__('admin/info.main')}}</span>
                </button>
            </h2>
            <h2 id="accordion-collapse-heading-3" class="flex">
                <button type="button" class="flex justify-between items-center p-5 font-medium text-left" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                    <span class="px-2">{{__('admin/info.extra')}}</span>
                </button>
            </h2>
        </div>
    </div>


    <div class="py-10">
        <div id="accordion-collapse-body-1" class="hidden block p-6 bg-gray-500 text-white rounded-lg border border-gray-200 shadow-md" aria-labelledby="accordion-collapse-heading-1">
            <h2 class="text-center mb-5">{{$post->title}}</h2>
            <div class="px-4">
                {!!$post->text_html!!}
            </div>
        </div>

        <div id="accordion-collapse-body-2" aria-labelledby="accordion-collapse-heading-2" class="hidden block p-6 bg-gray-500 text-white rounded-lg border border-gray-200 shadow-md">
            <h2>{{__('admin/blog/posts/show.title')}}: {{$post->title}}</h2>
            <p>{{__('admin/blog/posts/show.id')}}: {{$post->id}}</p>
            <p>{{__('admin/blog/posts/show.category')}}: {{$post->category->title}}</p>
            <p>{{__('admin/blog/posts/show.course')}}: {{$post->course->title}}</p>
            <p>{{__('admin/blog/posts/show.description')}}: {{$post->description}}</p>
        </div>

        <div id="accordion-collapse-body-3" aria-labelledby="accordion-collapse-heading-3" class="hidden block p-6 bg-gray-500 text-white rounded-lg border border-gray-200 shadow-md">
            <p>{{__('admin/blog/posts/show.slug')}}: {{$post->slug}}</p>
            @if ($post->is_published === true)
                <p>{{__('admin/blog/posts/show.published_at')}}: {{$post->published_at}}</p>
            @endif
            <p>{{__('admin/blog/posts/show.created_at')}}: {{$post->created_at}}</p>
            <p>{{__('admin/blog/posts/show.updated_at')}}: {{$post->updated_at}}</p>
        </div>

        <div class="bg-gray-800 mt-8 w-full rounded">
            <a href="{{route('admin.blog.posts.index')}}" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{__('admin/info.back')}}</a>
        </div>
    </div>
</div>
