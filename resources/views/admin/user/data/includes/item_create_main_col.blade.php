<div class="bg-gray-800 py-10 px-10 divide-y divide-gray-100">
    <div>
        <h2 class="bg-gray-500 w-[25%] py-2 px-2">{{__('admin/info.main')}}</h2>
    </div>
    <div class="pt-10">
         <div class="mb-10">
            <label for="name" class="block mb-2 text-sm font-medium text-white dark:text-gray-300">{{__('admin/user/data/create.name')}}</label>
            <input type="text" id="name" name="name" value="{{old('name')}}" class="bg-gray-500 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="mb-10">
            <label for="email" class="block mb-2 text-sm font-medium text-white dark:text-gray-400">{{__('admin/user/data/create.email')}}</label>
            <input type="text" name="email" class="block p-2.5 w-full text-sm text-white bg-gray-500 rounded-lg border border-gray-300 placeholder:text-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700" value="{{old('email')}}">
        </div>

        <div class="mb-10">
            <label for="password" class="block mb-2 text-sm font-medium text-white dark:text-gray-400">{{__('admin/user/data/create.password')}}</label>
            <input type="password" name="password" class="block p-2.5 w-full text-sm text-white bg-gray-500 rounded-lg border border-gray-300 placeholder:text-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700">
        </div>

        <div class="mb-10">
            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-white dark:text-gray-400">{{__('admin/user/data/create.password_confirmation')}}</label>
            <input type="password" name="password_confirmation" class="block p-2.5 w-full text-sm text-white bg-gray-500 rounded-lg border border-gray-300 placeholder:text-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700">
        </div>

        <div class="mb-10">
            <label for="role" class="block mb-2 text-sm font-medium text-white dark:text-gray-400">{{__('admin/user/data/create.role')}}</label>
            <select id="role" name="role" class="mb-10 bg-gray-500 border border-gray-700 text-white text-sm rounded-lg  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5W bg-arrow-down">
                @foreach($roles as $role)
                    <option class="bg-cyan-900" value="{{$role->id}}"
                            @if($role->id == 3) selected @endif>
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
