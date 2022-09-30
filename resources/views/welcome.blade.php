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

    <title>Welcome</title>
</head>
<body style="background-image: url('img_girl.jpg')" >
    @include('layouts.navbar')
    <div class="text-center mt-20 px-8 max-w-screen grid md:grid-cols-3 mb-20 sm:grid-cols-1">
        <div class="p-2 md:col-start-2 ">
            <h1 class="text-5xl pb-4 sm:text-2xl first-line:uppercase first-line:tracking-tight first-letter:text-7xl
            first-letter:font-bold  first-letter:text-green-500 first-letter:italic first-letter:mr-3 ">Computer Ecommerce</h1>   
            <p class="text-sm font-normal mt-6 text-center break-all leading-5 ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, quibusdam error? Ab doloribus vero consequatur dolore nostrum ratione nam! Ipsam totam, quas blanditiis animi quae quod nulla consequuntur velit aut? Lorem .</p>
        </div>
    </div>

    <div class="grid md:grid-cols-4  p-2 bg-green-200 sm:grid-cols-2 ">

        <div class="bg-white drop-shadow-lg p-5 my-6  rounded text-center md:col-start-2 sm:col-start-1">
            <img src="{{ asset('images/undraw_product_iteration_kjok.png') }}" alt="" class="object-scale-down h-32 w-64 mx-auto">
            <h2 class="text-xl text-green-700">Welcome to CECM</h2>
            <p class="text-sm  pt-6 text-gray-400 font-nunito">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore perferendis eos exercitationem commodi <ex class="lorem"></ex></p>

        </div>

        <div class="p-5 my-6 rounded text-center md:col-start-3  sm:col-start-1">
            <h2 class="text-xl text-green-700">Why we create CECM ? </h2>
            <p class="text-sm font-extralight pt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore perferendis eos exercitationem commodi ex.</p>
            <p class="text-sm  pt-4 text-gray-400 font-nunito ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore perferendis eos exercitationem commodi <ex class="lorem"></ex></p>
            <button class="rounded-xl px-6 py-3 bg-green-500 text-white text-sm mt-5 hover:bg-green-700">
                <a href="products">Start Explore</a>
            </button>
        </div>
    </div>

    <div class="mt-20 w-full">
        <h1 class="mt-4 text-center font-semibold tracking-wide text-2xl text-slate-700">Popular Products</h1>
        <div class="flex justify-center gap-16 p-8 pt-10 flex-wrap">

            <a href="products" class="flex flex-col items-center ">
                <img class="rounded-md object-fit md:w-40 sm:w-full inset-0" src="https://i.pinimg.com/736x/05/50/15/055015da029a2733520f962930384767.jpg" alt="">
                <span class="text-left sm:text-sm tracking-tighter pt-2">Roger Sphere</span>
            </a>

            <a href="products" class="flex flex-col items-center ">
                <img class="rounded-md object-fit md:w-40 sm:w-full" src="https://i.pinimg.com/736x/05/50/15/055015da029a2733520f962930384767.jpg" alt="">
                <span class="text-left sm:text-sm tracking-tighter pt-2">Asus 9TF</span>
            </a>


            <a href="products" class="flex flex-col items-center ">
                <img class="rounded-md md:w-40 sm:w-full" src="https://i.pinimg.com/736x/05/50/15/055015da029a2733520f962930384767.jpg" alt="">
                <span class="text-left sm:text-sm tracking-tighter pt-2">Asus 2023</span>
            </a>


            <a href="products" class="flex flex-col items-center ">
                <img class="rounded-md object-fit md:w-40 sm:w-full" src="https://i.pinimg.com/736x/05/50/15/055015da029a2733520f962930384767.jpg" alt="">
                <span class="text-left sm:text-sm tracking-tighter pt-2">Accer TF</span>
            </a>

        </div>
    </div>
   
    @include('layouts.footer')
</body>
</html>