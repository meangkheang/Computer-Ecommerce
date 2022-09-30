@extends('layouts.layout')
@section('content')
    <div class="w-full flex justify-center">
        <div class="w-1/2 flex p-12 gap-4 justify-center mb-24">
            <div class="w-full bg-stone-300">

            <form action="/products/laptop/{{ $product->id }}" method="post">
                @csrf
                <div class="xs:mb-6 cursor-pointer shrink-0 w-full ">
                    <a href="/products/laptop/{{ $product->id }}">
                        <img src="{{ $product->image_path }}"
                            alt="" class=" lg:h-96 h-40 object-cover w-full ">
                    </a>
                    <div class="flex-col justify-between items-start p-2">
                        <h1 class="mt-2 text-md p-4 font-bold text-xl">{{ $product->name }}</h1>
                        <p class="text-sm px-4">
                            {{ $product->des }}
                        </p>
                        <span class="text-center  text-md p-4 text-red-500 inline-block">{{ $product->price }}$</span><br>
                        <input type="number" min="1" value="1" class="outline-none px-2 py-2 rounded ml-4  w-1/5" name="quantity"><br>  
                        <a href="/cartlist">
                            <button class="border-2 rounded m-4 p-2 border-black hover:bg-black hover:text-white" type="submit">Add To
                                Cart</button>
                        </a>
                    </div>
                </div>
            </form>

            </div>
            <div class="w-full bg-stone-300"></div>

        </div>
    </div>
@endsection
