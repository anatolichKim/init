<table class="w-full text-sm text-left text-white">
    <thead class="text-xs text-white uppercase bg-blue-700 dark:bg-gray-700 dark:text-gray-400">
    <tr>
        <th scope="col" class="px-6 py-3">
            {{__('admin/blog/categories/index.table_id')}}
        </th>
        <th scope="col" class="px-6 py-3">
            {{__('admin/blog/categories/index.table_title')}}
        </th>
        <th scope="col" class="px-6 py-3">
            {{__('admin/blog/categories/index.table_parent_id')}}
        </th>
        <th scope="col" class="px-6 py-3">
            {{__('admin/blog/categories/index.table_description')}}
        </th>
        <th scope="col" class="px-6 py-3 text-center">
            {{__('admin/blog/categories/index.table_actions')}}
        </th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr class="border-b border-bl-200 bg-gray-500">
            <td class="px-6 py-4">
                {{$category->id}}
            </td>
            <td class="px-6 py-4">
                {{$category->title}}
            </td>
            <td class="px-6 py-4">
                {{$category->parent_id}}
            </td>
            <td class="px-6 py-4">
                {{$category->description}}
            </td>
            <td class="px-6 py-4 flex flex-column justify-around">
                <a href="{{route('admin.blog.categories.show', ['category'=>$category->id])}}">
                    <svg class="w-6 h-6 hover:stroke-cyan-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </a>
                <a href="{{route('admin.blog.categories.edit', ['category'=>$category->id])}}">
                    <svg class="w-6 h-6 hover:stroke-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </a>
                <form method="POST" action="{{route('admin.blog.categories.destroy', ['category'=>$category->id])}}">
                    @method("DELETE")
                    @csrf
                    <button>
                        <svg class="w-6 h-6 hover:stroke-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                </form>
            </td>
        </tr>

    @endforeach
    </tbody>
</table>
