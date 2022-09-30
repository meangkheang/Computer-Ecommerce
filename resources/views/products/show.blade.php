@extends('layouts.layout')
@section('content')
    <div class="w-full mb-[201px]">
        <div class="grid md:grid-cols-2 grid-cols-1 md:w-2/3 gap-2 md:mx-auto w-full px-4">
            <div class="xs:mb-6 cursor-pointer w-full p-3">
                <a href="/products/laptop/1">
                    <img src="https://images.unsplash.com/photo-1611078489935-0cb964de46d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                        alt="" class="h-96 object-cover w-full ">

                </a>
                <div class="mt-8 flex justify-between">
                    <button id="" class="border p-1 rounded"><img
                            src="https://images.unsplash.com/photo-1611078489935-0cb964de46d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                            alt="" class="h-20 object-cover w-full "></button>
                    <button id="" class="border p-1 rounded"><img
                            src="https://images.unsplash.com/photo-1611078489935-0cb964de46d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                            alt="" class="h-20 object-cover w-full "></button>
                    <button id="" class="border p-1 rounded"><img
                            src="https://images.unsplash.com/photo-1611078489935-0cb964de46d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                            alt="" class="h-20 object-cover w-full "></button>
                    <button id="" class="border p-1 rounded"><img
                            src="https://images.unsplash.com/photo-1611078489935-0cb964de46d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                            alt="" class="h-20 object-cover w-full "></button>
                </div>
            </div>
            <div class="flex flex-col items-start p-3 gap-2 ">
                <h1 class="text-center text-2xl">Asus Gaming Laptop</h1>
                <a href="#" class="flex list-none items-center mt-1 ">
                    <li><i class="bi bi-star-fill text-yellow-500"></i></li>
                    <li><i class="bi bi-star-fill text-yellow-500"></i></li>
                    <li><i class="bi bi-star-fill text-yellow-500"></i></li>
                    <li><i class="bi bi-star-fill text-yellow-500"></i></li>
                    <li><i class="bi bi-star"></i></li>
                    <span class="text-sm pl-2 text-green-700">10 reviews</span>
                </a>
                <hr class="h=[1px] text-black w-full">
                <div class="flex gap-2 my-3">
                    <h2 class="text-red-500 text-lg"><span>-</span>20<span>%</span></h2>
                    <h1 class="text-4xl">999<sup class="text-base align-middle">$</sup></h1>
                </div>

                <div class="flex flex-col gap-2 text-sm">
                    <h1 class="text-lg">Product Details</h1>
                    <h1>Brand: <span class="font-bold">A</span></h1>
                    <h1>Product Type: <span class="font-bold">A</span></h1>
                    <h1>Compatible Devices: <span class="font-bold">A</span></h1>
                    <h1>Description: <span class="font-bold">A</span></h1>
                </div>
                <hr class="h=[1px] text-black w-full my-2">
                <div>
                    <span>Qty: </span>
                    <select name="" id="" class="">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                <div class="flex gap-2 mt-4">
                    <button class="border rounded p-2 hover:bg-red-600 hover:text-white ">Add to Cart</button>
                    <button class="border rounded p-2 hover:bg-red-500 hover:text-white ">Buy Now</button>
                </div>
            </div>

        </div>
    </div>
@endsection
