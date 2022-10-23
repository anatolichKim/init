<div class="bg-gray-800 py-10 px-10 divide-y divide-gray-100">
    <div>
        <div id="accordion-collapse-edit" data-accordion="collapse" class="h-10 flex flex-column align-center" data-active-classes="text-white bg-gray-500">
            <h2 id="accordion-collapse-edit-heading-1" class="flex">
                <button type="button" class="flex justify-between items-center p-5 font-medium text-left" data-accordion-target="#accordion-collapse-edit-body-1" aria-expanded="true" aria-controls="accordion-collapse-edit-body-1">
                    <span class="px-2 ">{{__('admin/info.main')}}</span>
                </button>
            </h2>
        </div>
    </div>

    <div class="py-10">
        <div id="accordion-collapse-edit-body-1" class="hidden block text-white rounded-lg" aria-labelledby="accordion-collapse-edit-heading-1">
            <div class="mb-10">
                <label for="name" class="block mb-2 text-sm font-medium text-white dark:text-gray-300">{{__('admin/user/data/create.name')}}</label>
                <input type="text" id="name" name="name" value="{{$user->name}}" class="bg-gray-500 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <div class="mb-10">
                <label for="email" class="block mb-2 text-sm font-medium text-white dark:text-gray-400">{{__('admin/user/data/create.email')}}</label>
                <input type="email" name="email" class="block p-2.5 w-full text-sm text-white bg-gray-500 rounded-lg border border-gray-300 placeholder:text-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700" value="{{$user->email}}">
            </div>

            <div class="mb-10">
                <label for="role" class="block mb-2 text-sm font-medium text-white dark:text-gray-400">{{__('admin/user/data/create.role')}}</label>
                <select id="role" name="role" class="mb-10 bg-gray-500 border border-gray-700 text-white text-sm rounded-lg  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5W bg-arrow-down">
                    @foreach($roles as $role)

                        <option class="bg-cyan-900" value="{{$role->id}}"
                                @if($role->id == $user->role) selected @endif>
                            {{$role->title}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center mr-4">
                <input checked id="email_verification" name="email_verification" type="checkbox" value="{{true}}" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="email_verification" class="ml-2 text-sm font-medium text-white dark:text-gray-300">{{__('admin/user/data/create.email_verification')}}</label>
            </div>

            <div class="flex items-center mr-4">
                <input checked id="remember_me" name="remember_me" type="checkbox" value="{{true}}" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="remember_me" class="ml-2 text-sm font-medium text-white dark:text-gray-300">{{__('admin/user/data/create.remember_me')}}</label>
            </div>
        </div>
    </div>
</div>
