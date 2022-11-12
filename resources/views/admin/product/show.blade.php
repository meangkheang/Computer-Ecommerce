@extends('layouts.admin.layout')
@section('content')
    <div class="container mx-auto px-4 sm:px-8 mt-16 ">

        <div class="border flex justify-between p-4 items-center">
            <h3 class="text-xl font-bold">View Product</h3>
            <a href="/admin/products" class="hover:bg-blue-600 px-4 py-2 bg-blue-500 text-white rounded text-sm transition transform hover:-translate-y-0.5">Back</a>
        </div>

        @if(session()->has('message'))
        <div class="w-full bg-green-400 px-4 py-4  text-white text-sm">
            {{session('message')}}
        </div>
        @endif
        <div class="p-8 bg-white drop-shadow border shadow-lg mt-4 flex gap-24 justify-center">

            <div>
                <img src="{{ asset('images/products/'. $product->img ) }}" alt="" class="h-40  object-fit rounded mb-4">

                <h1 class="text-sm mb-4 font-bold mt-12">Preview Images</h1>
                <div class="flex gap-4">
                @foreach($product->Product_preview as $item)
                    <img src="{{ asset('images/products/'. $item->product_side ) }}" alt="" class="h-24 w-24  object-cover rounded mb-4">
                @endforeach
                </div>

            </div>  
           

            <div>
                <div class="mb-4">
                    <h1>Name</h1>
                    <div class="px-4 py-2 rounded bg-indigo-600 text-white">{{ $product->name }}</div>
                </div>

                <div class="mb-4">
                    <h1>Type</h1>
                    <div class="px-4 py-2 rounded bg-indigo-600 text-white">{{ $product->type }}</div>
                </div>
                <div class="mb-4">
                    <h1>Brand</h1>
                    <div class="px-4 py-2 rounded bg-blue-600 text-white">{{ $product->brand }}</div>
                </div>

                <div class="mb-4">
                    <h1>Price</h1>
                    <div class="px-4 py-2 rounded bg-blue-600 text-white">{{ $product->price }}$</div>
                </div>

            </div>
            <div>
                <div class="mb-4">
                    <h1>Rate</h1>
                    <div class="px-4 py-2 rounded bg-blue-600 text-white">{{ $product->rate }}</div>
                </div>
                <div class="mb-4">
                    <h1>Review</h1>
                    <div class="px-4 py-2 rounded bg-blue-600 text-white">{{ $product->review }}</div>
                </div>
                <div class="mb-4">
                    <h1>Discount</h1>
                    <div class="px-4 py-2 rounded bg-blue-600 text-white">{{ $product->discount }}</div>
                </div>
                <div class="mb-4">
                    <h1>Creat when</h1>
                    <div class="px-4 py-2 rounded bg-blue-600 text-white">{{ $product->created_at->DiffForHumans() }}</div>
                </div>
                <div class="mb-4">
                    <h1>Last update</h1>
                    <div class="px-4 py-2 rounded bg-blue-600 text-white">{{ $product->updated_at->DiffForHumans() }}</div>
                </div>
            </div>
        </div>


    </div>
@endsection