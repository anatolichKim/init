@if ($posts->links()->paginator->hasPages())
    <div class="mt-4 p-4 box text-center">
        {{ $posts->links() }}
    </div>
@endif
