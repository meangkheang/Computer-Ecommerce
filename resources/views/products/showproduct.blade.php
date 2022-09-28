@extends('layouts.layout')
@section('content')
    <div class="w-full flex justify-center">
        <div class="w-1/2 flex p-12 gap-4 justify-center">
            <div class="w-full bg-stone-300">
                <div class="xs:mb-6 cursor-pointer shrink-0 w-full ">
                    <a href="/products/laptop/1">
                        <img src="https://images.unsplash.com/photo-1611078489935-0cb964de46d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                            alt="" class=" lg:h-96 h-40 object-cover w-full ">
                    </a>
                    <div class="flex-col justify-between items-start p-2">
                        <h1 class="mt-4 text-md p-4">Asus Gaming Laptop</h1>
                        <p class="text-sm p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ratione
                            exercitationem est! Magni quos, beatae labore quam ex incidunt temporibus possimus dignissimos.
                        </p>
                        <span class="text-center mt-2 text-md p-4 text-red-500">999$</span><br>
                        <a href="/cartlist">
                            <button class="border-2 rounded m-4 p-2 border-black hover:bg-black hover:text-white">Add To
                                Cart</button></a>
                    </div>
                </div>
            </div>
            <div class="w-full bg-stone-300"></div>

        </div>
    </div>
@endsection
