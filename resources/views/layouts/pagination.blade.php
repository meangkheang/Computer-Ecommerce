<div class="p-8 mx-auto w-2/3 ">
    <a class="border bg-lime-400 px-3 py-2 text-red-500 inline-block" href="{{ $paginator->preViousPageUrl() }}">Previous</a>
    <a class="border bg-lime-400 px-3 py-2 text-red-500 inline-block" href="{{ $paginator->nextPageUrl() }}">Next</a>

    <br>
    @foreach ($paginator->items() as $item)
        <p class="pt-2 p-4 bg-stone-400">{{ $item->id }}</p>
    @endforeach
</div>