<div class="overflow-y-auto bg-gray-800 border-r-2 border-gray-400 px-3 text-white">
    <div class="relative w-10 mt-16 ml-14 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
        <svg class="absolute w-15 h-15 text-gray-400 " fill="currentColor" viewBox="0 0 20 20"
             xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                  clip-rule="evenodd"></path>
        </svg>
    </div>

    <ul class="space-y-2 mt-10">
        <li>
            <a href="#"
               class="flex items-center p-2 text-base font-normal rounded-lg  hover:bg-gray-200 hover:text-blue-500">
                <svg
                    class="w-6 h-6 transition duration-75 dark:text-gray-500 dark:group-hover:text-white"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg>
                <span class="ml-3 hover:text-blue-700">{{__('admin.dashboard')}}</span>
            </a>
        </li>
        <li>
            <button type="button"
                    class="flex items-center p-2 w-full text-base font-normal rounded-lg transition duration-75 group hover:bg-gray-100 hover:text-blue-500 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-blog" data-collapse-toggle="dropdown-blog">
                <svg
                    class="flex-shrink-0 w-6 h-6 transition duration-75 dark:text-gray-400 dark:group-hover:text-white"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                          clip-rule="evenodd"></path>
                </svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">{{__('admin.blog')}}</span>
                <svg sidebar-toggle-item="" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul id="dropdown-blog" class="hidden py-2 space-y-2">
                <li>
                    <a href="{{route('admin.blog.categories.index')}}"
                       class="flex items-center p-2 pl-11 w-full text-base font-normal rounded-lg transition duration-75 group hover:text-blue-500 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{__('admin.categories')}}</a>
                </li>
                <li>
                    <a href="#"
{{--                       {{route('admin.blog.courses')}}--}}
                       class="flex items-center p-2 pl-11 w-full text-base font-normal rounded-lg transition duration-75 group hover:text-blue-500 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{__('admin.courses')}}</a>
                </li>
                <li>
                    <a href="#"
{{--                       {{route('admin.blog.posts')}}--}}
                       class="flex items-center p-2 pl-11 w-full text-base font-normal rounded-lg transition duration-75 group hover:text-blue-500 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{__('admin.posts')}}</a>
                </li>
            </ul>
        </li>

        <li>
            <button type="button"
                    class="flex items-center p-2 w-full text-base font-normal rounded-lg transition duration-75 group hover:bg-gray-100 hover:text-blue-500 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-users" data-collapse-toggle="dropdown-users">
                <svg class="flex-shrink-0 w-6 h-6 transition duration-75 dark:text-gray-400 dark:group-hover:text-white"
                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                          clip-rule="evenodd"></path>
                </svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap"
                      sidebar-toggle-item="">{{__('admin.users')}}</span>
                <svg sidebar-toggle-item="" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul id="dropdown-users" class="hidden py-2 space-y-2">
                <li>
                    <a href="#"
                       class="flex items-center p-2 pl-11 w-full text-base font-normal rounded-lg transition duration-75 group hover:text-blue-500 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{__('admin.users_data')}}</a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center p-2 pl-11 w-full text-base font-normal rounded-lg transition duration-75 group hover:text-blue-500 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{__('admin.comments')}}</a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center p-2 pl-11 w-full text-base font-normal rounded-lg transition duration-75 group hover:text-blue-500 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{__('admin.roles')}}</a>
                </li>
            </ul>
        </li>

        <li>
            <button type="button"
                    class="flex items-center p-2 w-full text-base font-normal rounded-lg transition duration-75 group hover:bg-gray-100 hover:text-blue-500 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-login" data-collapse-toggle="dropdown-login">
                <svg
                    class="flex-shrink-0 w-6 h-6 transition duration-75 dark:text-gray-400 dark:group-hover:text-white"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                          clip-rule="evenodd"></path>
                </svg>
                <span class="flex-1 ml-3 text-left whitespace-nowrap"
                      sidebar-toggle-item="">{{__('admin.login')}}</span>
                <svg sidebar-toggle-item="" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>

            <ul id="dropdown-login" class="hidden py-2 space-y-2">
                <li>
                    <a href="#"
                       class="flex items-center p-2 pl-11 w-full text-base font-normal rounded-lg transition duration-75 group hover:text-blue-500 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{__('admin.role_admin')}}</a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center p-2 pl-11 w-full text-base font-normal rounded-lg transition duration-75 group hover:text-blue-500 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{__('admin.role_user')}}</a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center p-2 pl-11 w-full text-base font-normal rounded-lg transition duration-75 group hover:text-blue-500 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{__('admin.role_editor')}}</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"
               class="flex items-center p-2 text-base font-normal rounded-lg hover:text-blue-500 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg
                    class="flex-shrink-0 w-6 h-6 transition duration-75 dark:text-gray-400 dark:group-hover:text-white"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                          clip-rule="evenodd"></path>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">{{__('admin.logout')}}</span>
            </a>
        </li>
    </ul>
</div>
