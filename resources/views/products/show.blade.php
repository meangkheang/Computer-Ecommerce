@extends('layouts.layout')
@section('content')
    <div class="h-[90%] mt-8">
        <div class="grid md:grid-cols-2 grid-cols-1  lg:w-2/3 gap-2 lg:mx-auto w-full h-full px-4">
            <div class="xs:mb-6 cursor-pointer w-full p-3">
                <a href="/products/{{ $product->type }}/{{ $product->id }}">
                    <img src="{{ $product->img }}"
                        alt="" class="h-96 object-contain w-full " id="active_img">

                </a>
                <div class="mt-8 flex justify-around">
                    @foreach ($product->Product_preview as $img_preview)
                        <button id="preview_img" class="shadow-lg p-1 rounded lg:w-1/4"><img
                            src="{{ $img_preview->product_side }}"
                            alt="" class="h-20 object-contain  w-full "></button>
                    @endforeach
                   
                </div>
            </div>
            <div class="flex flex-col items-start p-3 gap-2 ">
                <h1 class="text-center text-2xl">{{ $product->name }}</h1>
                <a href="#" class="flex list-none items-center mt-1">
                    @for($x = 0;$x<$product->rate;$x++)
                    <li><i class="bi bi-star-fill text-yellow-500"></i></li>
                    @endfor
                    @for($x = 0;$x<5-$product->rate;$x++)
                    <li><i class="bi bi-star text-yellow-500"></i></li>
                    @endfor

                    <span class="text-sm pl-2 text-green-700">{{ $product->review }} {{ $product->review <= 0? 'review' : 'reviews' }}</span>
                </a>
                <hr class="h=[1px] text-black w-full">
                <div class="flex gap-2 my-3">
                    <h2 class="text-red-500 text-lg">
                        @if ($product->discount == 0)
                        <span></span> 
                        @else
                        <span>-</span>{{ $product->discount }}<span>%</span>
                        @endif
                    </h2>
                    <h1 class="text-4xl">{{ $product->price }}<sup class="text-base align-middle">$</sup></h1>

                </div>

                <div class="flex flex-col gap-2 text-sm">
                    <h1 class="text-lg">Product Details</h1>
                    <h1>Brand: <span class="font-bold">{{ $product->brand }}</span></h1>
                    <h1>Product Type: <span class="font-bold">{{ $product->type }}</span></h1>
                    <h1>Compatible Devices: <span class="font-bold">A</span></h1>
                    <h1>Description: <span class="font-bold">{{ $product->description }}</span></h1>
                </div>
                <hr class="h=[1px] text-black w-full my-2">

                <form action="/addtocard/{{ $product->id }}" method="get">
                    <div>
                        <span>Qty: </span>
                        <select name="quantity" id="" class="w-24">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                <div class="flex gap-2 mt-4">
                        <button type="submit" class="border rounded p-2 hover:bg-red-600 hover:text-white ">Add to Cart</button>
                </form>
                    <a href="/buynow/{{ $product->id }}" class="border rounded p-2 hover:bg-red-500 hover:text-white">Buy Now</a>
                </div>
            </div>

        </div>
    </div>

    <script>
        let imgs = document.querySelectorAll('#preview_img');
        let active_img = document.getElementById('active_img');
    
    
        
        for(let i = 0;i<imgs.length;i++){

            imgs[i].addEventListener('click',(e)=>{
                active_img.src = imgs[i].children[0].src;
            });
        }
       

       
    
    
    </script>

@endsection


