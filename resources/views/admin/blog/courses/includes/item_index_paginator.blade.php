@if ($courses->links()->paginator->hasPages())
    <div class="mt-4 p-4 box text-center">
        {{ $courses->links() }}
    </div>
@endif
