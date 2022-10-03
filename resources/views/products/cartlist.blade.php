<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Cart List</title>
</head>

<body>

    @include('layouts.navbar')
    <!-- component -->
    @include('layouts.popupmsg')

    <div class="w-[80%] mx-auto md:w-1/1.5 h-screen my-10 ">
        <div class="flex justify-between px-4">
            <h1 class="text-md md:text-2xl  font-bold font-sans pb-8 ">Shopping Cart</h1>
            <div>
                @if (session('cart_count') >0)
                    <button onclick="document.getElementById('quantity_form').submit()"  type="submit" class="inline-block rounded px-4 py-2 text-sm bg-blue-600  text-white ">Check out</button>
                @endif
            </div>
        </div>
        
        <hr class="pt-8">

        <div class="">

            <form action="/checkout" id="quantity_form">
            
            @forelse ($cart_projects as $item)
            <div class="flex items-start justify-between">
                <div class="flex gap-8 w-[50%]">
                    <img src="{{ $item->product->img }}"
                        alt="" class="w-[30%] md:w-[25%] rounded-sm object-cover">
                    <div>
                        <div class="flex flex-col items-start justify-between h-full">
                            <div>
                                <p class="text-lg ">{{ $item->product->name }}</p>
                            </div>

                            <div class="flex gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                </svg>
                                <p>in stock</p>
                            </div>

                        </div>

                    </div>

                </div>

                <div>
                    <input type="number" class="bg-gray-200 px-4 py-2 w-16 outline-none" value="{{ $item->quantity }}" name="quantity[]"><br>
                 

                    <a href="/cartlist/delete/{{ $item->id }}" type="submit" class="inline-block px-4 py-2 bg-red-500 hover:text-black rounded-sm mt-4 text-white ">Remove</a>
                    
                </div>

                <div>
                    <h1>${{ $item->product->price }}</h1>
                </div>
            </div>
            <hr class="pt-8 mt-8">
            @empty
            <img src="https://shop.millenniumbooksource.com/static/images/cart1.png" alt="" class="mx-auto w-1/2">
            @endforelse
          
            </form>

        </div>
    </div>


</body>

</html>
