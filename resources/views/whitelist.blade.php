<!DOCTYPE html>
<html lang="en">
@include('links.headerlinks',['title' => 'White List'])
<body>
@include('layouts.navbar')
    
<div class="w-[80%] mx-auto md:w-1/1.5 my-10 ">
    <h1 class="text-left font-bold text-2xl pb-4">White List ({{ count($whitelist) }})</h1>
    <hr>


    @forelse ($whitelist as $item)
    <a href="/products/{{ $item->product->type }}/{{ $item->product->id }}">

        <div class="flex items-start justify-between mt-4 ">
            <div class="flex gap-8 w-full relative justify-evenly items-center">
                <img src="{{ $item->product->img }}"
                    alt="" class="w-[8rem] md:h-[6rem] md:w-[6rem] h-[6rem] rounded-sm object-contain">
                <div class="flex flex-col items-start justify-between h-full">
                    <div >
                        <p class="text-sm ">{{ $item->product->name }}</p>
                    </div>

                    <div class="flex gap-1 text-sm ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                            fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path
                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                        </svg>
                        <p>in stock</p>
                    </div>
                </div>


            </div>

            <div>
                <a href="/whitelist/delete/{{ $item->id }}" type="submit" class="inline-block px-4 py-2 bg-red-500 hover:text-black rounded-sm mt-4 text-white ">Remove</a>
            </div>
        </div>
        <hr class="mt-4">
    </a>

    @empty
        <h1 class="text-3xl text-center font-bold pt-12">No item yet!!</h1>
    @endforelse

</div>

</body>
</html>

