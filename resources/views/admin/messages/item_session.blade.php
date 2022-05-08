@if(session('success'))
    <div class="p-4 text-sm text-white bg-green-700 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
        <span class="font-medium">{{session()->get('success')}}</span>
    </div>
@endif
