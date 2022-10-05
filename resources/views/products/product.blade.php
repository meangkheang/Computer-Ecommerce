@extends('layouts.layout')
@section('content')
    {{-- sort by and result --}}

    <div class="w-full flex justify-between py-2 px-4 sm:text-base text-sm sm:px-8 sm:flex-row flex-col">
        <div class="">Showing 1-{{ count($products) }} out of {{ count($products) }}</div>
        <div class="flex items-center">

            <form action="/products/sortBy?type={{ count($products) > 0? $products[0]->type: '' }}" id="sortby" method="post">
                @csrf
                <input type="hidden" value="{{  count($products) ? $products[0]->type : '' }}" name="type">
                <input type="hidden" value="{{ count($products) ? $products[0]->brand :'' }}" name="brand">

                @if (isset($sortBy))
                    <select id="" class="border-2 px-3 mx-2" name="sortby" onchange="document.getElementById('sortby').submit()">
                        <option value="Recommend" {{ $sortBy== 'Recommend'? 'selected' :'' }}>Recommend</option>
                        <option value="Popular" {{ $sortBy == 'Popular' ? 'selected' :'' }}>Popular</option>
                        <option value="Newest" {{ $sortBy == 'Newest' ? 'selected' :'' }}>Newest</option>
                    </select>
                @else
                    <select id="" class="border-2 px-3 mx-2" name="sortby" onchange="document.getElementById('sortby').submit()">
                        <option value="Recommend" >Recommend</option>
                        <option value="Popular" >Popular</option>
                        <option value="Newest">Newest</option>
                    </select>
                @endif
               
            </form>
            
        </div>
    </div>
    <div class="w-full flex">
        @include('layouts.sidefilter')
        <div class="w-4/5 grid lg:grid-cols-4 gap-4 p-4 md:grid-cols-3 sm:grid-cols-2">

            @forelse ($products as $product)
                <div class="bg-white border rounded hover:scale-95 transition-all duration-200">
                    <div class="xs:mb-6 cursor-pointer shrink-0 w-full ">
                        <a href="/products/{{ $product->type }}/{{ $product->id }}">
                            <img src="{{ $product->img }}"
                                alt="" class="rounded lg:h-96 h-40 object-contain w-full ">
                            <div class="flex flex-col justify-between items-start">
                                <h1 class="text-center mt-4 text-md px-4">{{ $product->name }}</h1>
                                <a href="#" class="flex list-none pl-4 items-center mt-1">
                                    @for($x = 0;$x<$product->rate;$x++)
                                    <li><i class="bi bi-star-fill text-yellow-500"></i></li>
                                    @endfor
                                    @for($x = 0;$x<5-$product->rate;$x++)
                                    <li><i class="bi bi-star text-yellow-500"></i></li>
                                    @endfor
                                    <span class="text-sm pl-2 text-green-700">{{ $product->review }} {{ $product->review <= 0? 'review' : 'reviews' }}</span>
                                </a>
                                <span class="text-center mt-1 text-xl pl-4 text-red-500">$<span
                                    class="text-black">{{ $product->price }}</span></span>
                               
                                
                            </div>
                        </a>

                    </div>
                </div>
            @empty
                <h1 class="text-2xl text-center ">Empty Here :)</h1>
            @endforelse
          
        </div>
    </div>
@endsection
