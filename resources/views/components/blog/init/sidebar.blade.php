<div class="bg-gradient-to-b from-gray-800 to-gray-900 px-3 text-white mb-64 pt-10 pl-20">
    <div class="text-center"><span class="ml-5 font-bold text-2xl">{{$course->title}}</span></div>
    <ul class="space-y-1 mt-5">
        @foreach($modules as $module)
            <li>
                <button type="button"
                        class="flex items-center p-2 w-full text-base font-normal rounded-lg transition duration-75 group hover:text-blue-500 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-init-{{$module->id}}" data-collapse-toggle="dropdown-init-{{$module->id}}">
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">{{$module->title}}</span>
                    <svg sidebar-toggle-item="" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-init-{{$module->id}}" class="py-2 space-y-2">
                    @foreach($posts as $postForModule)
                        @if($postForModule->module_id === $module->id)
                            <li>
                                <a href="{{route('blog.init.show', $postForModule->id)}}"
                                   class="flex items-center p-2 pl-11 w-full text-base font-normal rounded-lg transition duration-75 group hover:text-blue-500
                                        @if((isset($post) && $postForModule->id === $post->id)
                                           || (isset($firstPost) && $postForModule->id === $firstPost->id))
                                            bg-gray-700
                                        @endif
                                   ">
                                    {{$postForModule->title}}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</div>
