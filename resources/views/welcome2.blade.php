<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computer-Ecommerce</title>
   
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
   
</head>
<body>
   
    @include('layouts.navbar')
    <div class="w-full relative ">
        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1920&q=80" alt="bg.png" class="w-full h-96 object-cover">
        <div class="absolute top-20  text-black left-80 xs:left-auto xs:translate-x-5 xs:font-thin">
            <h1 class="uppercase text-red-500 font-extralight tracking-thin">Summer Sale</h1>
            <h1 class="text-4xl uppercase font-bold">Get up to </h1>
            <h1 class="text-7xl uppercase font-extrabold">15%</h1><br>
            <a href="products">
                <button class="px-8 py-3 bg-gray-600 rounded-xl text-white shadow hover:bg-gray-700">Shop Now</button>

            </a>
        </div>
    </div>    

    <div class="w-full text-center my-12 mb-12">
        <h1 class="uppercase font-thin text-2xl tracking-wider first-letter:text-red-500 first-letter:text-6xl
        first-letter:tracking-tight first-letter:italic mb-16 xs:mb-4">Products</h1>

        <div class="grid grid-cols-2  md:mx-56 gap-8 xs:mx-4 xs:gap-2 ">
            <div class="col-start-1 row-span-1">
                <img src="https://images.unsplash.com/photo-1494621930069-4fd4b2e24a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80" alt="" class="rounded">
            </div>
            
            <div class="grid grid-cols-2 gap-8 xs:gap-2">
                
                <div class="col-span-2 "> 
                    <img src="https://images.unsplash.com/photo-1589578228447-e1a4e481c6c8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="" class="rounded">
                </div>

                <div class="">
                    <img src="https://images.unsplash.com/photo-1580236176063-bea7f16aec30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=672&q=80" alt="" class="rounded h-full">
                </div>

                <div class="">
                    <img src="https://images.unsplash.com/photo-1607677686474-ad91fc94f5ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=680&q=80" alt="" class="rounded h-full">
                </div>
            </div>

           
        </div>
    </div>

    <div class="w-full mb-12 mt-32">
        <div class="text-center mx-auto w-1/2 mb-10 ">
            <h1 class="uppercase text-4xl pb-2">Sales</h1>
            <p class="text-left mt-4 text-lg font-thin tracking-tighter">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed massa diam, feugiat
                at mi vel, suscipit pharetra lacus. Donec sit amet augue fermentum, auctor ante a,
                condimentum erat .  pharetra lacus. Donec sit amet augue fermentum, auctor ante a</p>
        </div>

        <div class="grid grid-cols-4 gap-8 flex-wrap xs:grid-cols-2 xs:gap-3 mx-52 xs:mx-4">
            <div class="xs:mb-6 cursor-pointer">
                <a href="/products/">
                <img src="https://images.unsplash.com/photo-1494621930069-4fd4b2e24a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80" alt="" class="rounded h-96 object-cover w-full hover:scale-105 transition-all duration-200 delay-75 " >
                </a>
                <h1 class="text-center mt-4 text-md">Asus Gaming Laptop</h1>
            </div> 
            <div class=" xs:mb-6 cursor-pointer ">
                <img src="https://images.unsplash.com/photo-1541807084-5c52b6b3adef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="" class="rounded h-96 object-cover w-full hover:animate-bounce duration-200">
                <h1 class="text-center mt-4 text-md">Gaming Keyboard</h1>

            </div>

            <div class="xs:mb-6 cursor-pointer">
                <img src="https://images.unsplash.com/photo-1527814050087-3793815479db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1928&q=80" alt="" class="rounded h-96 object-cover w-full hover:animate-ping">
                <h1 class="text-center mt-4 text-md">Logitech Mouse</h1>
            </div>

            <div class=" xs:mb-6 cursor-pointer">
                <img src="https://images.unsplash.com/photo-1504274066651-8d31a536b11a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80" alt="" class="rounded h-96 object-cover w-full hover:animate-pulse">
                <h1 class="text-center mt-4 text-md">IOS Headphone</h1>

            </div>
        </div>

    </div>

    <hr>
    <div class="w-full p-8 drop-shadow-2xl " id="about">
        <h1 class="font-bold text-center text-2xl">ABOUT US</h1>

        <div class="grid grid-cols-2 items-center mx-56 xs:mx-2 xs:grid-cols-1 ">
            <img src="https://images.unsplash.com/photo-1470137237906-d8a4f71e1966?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1920&q=80" alt="" class=" justify-self-center rounded-2xl p-8 w-96 h-full object-cover">
            <div class="mt-8 ">
                <div class="w-full xs:text-center">
                    <h1 class="font-bold text-4xl mb-8">Why choose us?</h1>
                    <p class="">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Sed massa diam, feugiat at mi vel, suscipit pharetra
                        lacus. Donec sit amet augue fermentum, auctor ante
                        a, condimentum erat. Aenean in eleifend lorem. Etiam
                        elementum turpis lacus, eu viverra ligula auctor in.
        
                </div>
                </p>
            </div>
        </div>
    </div>

    <div class="w-full font-bold text-center text-2xl p-8 ">
        <h1 class="text-center mb-10">Feedbacks</h1>

        <div class="flex gap-8 justify-center flex-wrap">
            <div class="p-4 shadow-lg w-[16rem]">
                <img src="https://i.pinimg.com/736x/50/9e/c0/509ec0cb3a7f1d47d67afc81a8751f70.jpg" alt="" class="rounded-full w-24 mb-4 mx-auto">
                <div>
                    <h1>Thomas</h1>
                    <span class="text-xs font-thin text-gray-300 bg-indigo-700 rounded px-2 py-1">React Dev</span>
                    <br>

                    <p class="mt-6 text-sm font-thin">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, quo tempora. Accusamus, dolorum. Nihil adipisci repellat totam perspiciatis laboriosam minus rem labore libero. Temporibus accusantium tenetur soluta quia nisi inventore.</p>
                </div>
                
            </div>

            <div class="p-4 shadow-lg w-[16rem]">
                <img src="https://i.pinimg.com/736x/97/d7/8b/97d78bd627c7cb5935140fbb4f312a31.jpg" alt="" class="rounded-full w-24 mb-4 mx-auto">
                <div>
                    <h1>Thomas</h1>
                    <span class="text-xs font-thin text-gray-300 bg-indigo-700 rounded px-2 py-1">Rail Dev</span>
                    <br>

                    <p class="mt-6 text-sm font-thin">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, quo tempora. Accusamus, dolorum. Nihil adipisci repellat totam perspiciatis laboriosam minus rem labore libero. Temporibus accusantium tenetur soluta quia nisi inventore.</p>
                </div>
                
            </div>

            <div class="p-4 shadow-lg w-[16rem]">
                <img src="https://i.pinimg.com/736x/d1/00/e6/d100e654ce2420bd44e343351f262542.jpg" alt="" class="rounded-full w-24 mb-4 mx-auto">
                <div>
                    <h1>Thomas</h1>
                    <span class="text-xs font-thin text-gray-300 bg-indigo-700 rounded px-2 py-1">Laravel Dev</span>
                    <br>

                    <p class="mt-6 text-sm font-thin">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, quo tempora. Accusamus, dolorum. Nihil adipisci repellat totam perspiciatis laboriosam minus rem labore libero. Temporibus accusantium tenetur soluta quia nisi inventore.</p>
                </div>
                
            </div>

            <div class="p-4 shadow-lg w-[16rem]">
                <img src="https://i.pinimg.com/736x/a8/82/15/a88215c61f2f631b47dcf2adf12b66c3.jpg" alt="" class="rounded-full w-24 mb-4 mx-auto">
                <div>
                    <h1>Thomas</h1>
                    <span class="text-xs font-thin text-gray-300 bg-indigo-700 rounded px-2 py-1">C# Dev</span>
                    <br>

                    <p class="mt-6 text-sm font-thin">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, quo tempora. Accusamus, dolorum. Nihil adipisci repellat totam perspiciatis laboriosam minus rem labore libero. Temporibus accusantium tenetur soluta quia nisi inventore.</p>
                </div>
                
            </div>

        </div>
        
    </div>
   
    @include('layouts.footer')
  
</body>
</html>