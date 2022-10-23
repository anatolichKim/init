@if ($users->links()->paginator->hasPages())
    <div class="mt-4 p-4 box text-center">
        {{ $users->links() }}
    </div>
@endif
