@if ($categories->links()->paginator->hasPages())
    <div class="mt-4 p-4 box text-center">
        {{ $categories->links() }}
    </div>
@endif
