@if ($modules->links()->paginator->hasPages())
    <div class="mt-4 p-4 box text-center">
        {{ $modules->links() }}
    </div>
@endif
