@if($errors->any())
    <div class="p-4 mb-4 text-sm text-white-700 bg-red-700 rounded-lg">
        <span class="font-medium">{{$errors->first()}}</span>
    </div>
@endif
