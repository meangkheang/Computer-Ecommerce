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

    <div class="rounded p-8 w-1/2 left-[25vw] bg-white absolute top-[20vh] drop-shadow-lg shadow-lg hidden" id="checkout_content">
        <div class="flex justify-between items-center mb-4">
            <p class="text-2xl pl-5 font-bold text-center ">Creditial's Information</p>
            <div id="close_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                </svg>
            </div>
        
        </div>
        <hr>

        @include('layouts.creditcard')
        <br>
        <a class="px-4 py-3 text-white rounded bg-blue-600 text-sm hover:bg-blue-800 ml-5 cursor-pointer" href="/?pay_sucess=1">Confirm Payment</a>
        

    </div>

    <div class="w-[80%] mx-auto md:w-1/1.5 h-screen m-32 ">
        <div class="flex justify-between items-center">
            <h1 class="text-md md:text-2xl  font-bold font-sans pb-8 ">Shopping Cart</h1>
            <button class="px-4 py-3 text-white rounded bg-blue-600 text-sm hover:bg-blue-800" {{ count($CartProducts)>0 ? '' : 'hidden'}} id="checkout_btn">Checkout</button>
        </div>
       
        
        
        <div class="">
            <hr class="pt-8 mt-2">

            @forelse ($CartProducts as $item)
                <div class="flex items-start justify-between">
                    <div class="flex gap-8 w-[50%]">
                        <img src="{{  $item->Product->image_path }}" alt="" class="h-60 w-[30%] md:w-[25%] rounded-sm object-cover">
                        <div>
                            <div class="flex flex-col items-start justify-between h-full">
                                <div>
                                    <p class="text-lg ">{{ $item->Product->name }}</p>   
                                    <p class="text-lime-800">White</p>
                                </div>

                                <div class="flex gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                    </svg>
                                    <p>in stock</p>
                                </div>
                            
                            </div>

                        </div>

                    </div>

                    <div>
                        <input type="number" class="bg-gray-200 px-4 py-2 w-20 outline-none" value="{{  $item->Product->quantity }}"><br>
                        <a class="px-4 py-2 bg-red-400 rounded-sm mt-4 inline-block" href="{{ url('/cartlist/'. $item->product_id) }}">Remove</a>
                    </div>

                    <div>
                        <h1>${{  $item->Product->price }}</h1>
                    </div>
                </div>
                <hr class="pt-8 mt-8">
            @empty
                <img src="https://book.smartercarrentals.com/images/cart.png" alt="" class="mx-auto">
            @endforelse
            <h1 class="text-md float-right">Subtotal : $0</h1>   
        </div>
    </div>

    <script>
        let checkout_btn= document.getElementById('checkout_btn');
        let checkout_content= document.getElementById('checkout_content');
        let close_btn= document.getElementById('close_btn');

        function checkout(){
            checkout_btn.addEventListener('click',function(e){
                checkout_content.classList.remove('hidden');

            });

            //close content
            close_btn.addEventListener('click',function(e){
                checkout_content.classList.add('hidden');

            });
        }
        checkout();


    </script>

</body>
</html>