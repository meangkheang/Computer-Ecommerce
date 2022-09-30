@extends('layouts.layout')
@section('content')
    {{-- sort by and result --}}
    <div class="w-full flex justify-between py-2 px-8">
        <div class="">Showing 1-{{ count($products) }} out of {{ count($products) }}</div>

        <form action="/products/laptop/filter?type={{ request('type') }}" method="post">
            @csrf
            <div class="flex items-center">
                <h1>Sort By:</h1>
                <select id="" class="border-2 px-3 mx-2" name="sortby" onchange="this.form.submit()">
                    <option value="recommend" {{ request('sortby') == 'recommend' ? 'selected' : '' }}>Recommend</option>
                    <option value="popular" {{ request('sortby') == 'popular' ? 'selected' : '' }}>Popular</option>
                    <option value="newest" {{ request('sortby') == 'newest' ? 'selected' : '' }}>Newest</option>
                </select>
            </div>

        </form>
       
    </div>
    <div class="w-full flex mb-24">
        @include('layouts.sidefilter')
        <div class="w-4/5 grid grid-cols-4 gap-4 p-4">
            @forelse ($products as $product)
                <div class="bg-stone-100 rounded hover:scale-95 transition-all duration-200">

                    <div class="xs:mb-6 cursor-pointer shrink-0 w-full ">
                        <a href="/products/laptop/{{ $product->id }}">
                            <img src="{{ $product->image_path }}"
                                alt="" class="rounded lg:h-96 h-40 object-cover w-full ">
                            <div class="flex flex-col justify-between items-start">
                                <h1 class="text-center mt-4 text-md pl-4 font-bold">{{ $product->name }}</h1>
                                <a href="#" class="flex list-none pl-4 items-center mt-1">

                                    @if ($product->rate <= 0)
                                        <li><i class="bi bi-star"></i></li>
                                        <li><i class="bi bi-star"></i></li>
                                        <li><i class="bi bi-star"></i></li>
                                        <li><i class="bi bi-star"></i></li>
                                        <li><i class="bi bi-star"></i></li>
                                    @else
                                        @for ($x = 0;$x<$product->rate;$x++)
                                            <li><i class="bi bi-star-fill"></i></li>
                                        @endfor

                                        @for ($x = 0;$x< 5-$product->rate;$x++)
                                            <li><i class="bi bi-star"></i></li>
                                        @endfor
                                    @endif

                                    
                                   
                                    <span class="text-sm pl-2 text-green-700">{{ $product->review }} {{ $product->review > 0 ? 'reviews' : 'review' }}</span>
                                </a>
                                <span class="text-center mt-1 text-xl pl-4 text-red-500">$<span
                                        class="text-black">{{ $product->price }}</span></span>
                            </div>
                        </a>

                    </div>
                </div>

            @empty
                <h1 class="text-2xl font-bold text-center">No Products</h1>
            @endforelse
              

            
            {{-- <div class="bg-stone-100"></div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100 rounded hover:scale-95 transition-all duration-200">
            </div>
            <div class="bg-stone-100 rounded hover:scale-95 transition-all duration-200">
                <div class="xs:mb-6 cursor-pointer shrink-0 w-full ">
                    <a href="/products/">
                        <img src="https://images.unsplash.com/photo-1611078489935-0cb964de46d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                            alt="" class="rounded lg:h-96 h-40 object-cover w-full ">
                        <div class="flex flex-col justify-between items-start">
                            <h1 class="text-center mt-4 text-md pl-4">Asus Gaming Laptop</h1>
                            <span class="text-center mt-2 text-md pl-4 text-red-500">20%</span>
                        </div>
                    </a>

                </div>

            </div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100 rounded hover:scale-95 transition-all duration-200">
                <div class="xs:mb-6 cursor-pointer shrink-0 w-full ">
                    <a href="/products/">
                        <img src="https://images.unsplash.com/photo-1611078489935-0cb964de46d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                            alt="" class="rounded lg:h-96 h-40 object-cover w-full ">
                        <div class="flex flex-col justify-between items-start">
                            <h1 class="text-center mt-4 text-md pl-4">Asus Gaming Laptop</h1>
                            <span class="text-center mt-2 text-md pl-4 text-red-500">20%</span>
                        </div>
                    </a>

                </div>

            </div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100"></div> --}}
        </div>
    </div>
@endsection
