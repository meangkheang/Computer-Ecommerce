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
        <h1 class="text-md md:text-2xl  font-bold font-sans pb-8 ">Shopping Cart</h1>
        <hr class="pt-8">

        <div class="">

            <div class="flex items-start justify-between">
                <div class="flex gap-8 w-[50%]">
                    <img src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                        alt="" class="w-[30%] md:w-[25%] rounded-sm object-cover">
                    <div>
                        <div class="flex flex-col items-start justify-between h-full">
                            <div>
                                <p class="text-lg ">Normad Tumbler</p>
                                <p class="text-lime-800">White</p>
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
                    <input type="number" class="bg-gray-200 px-4 py-2 w-16 outline-none" value="1"><br>
                    <button class="px-4 py-2 bg-red-500 hover:text-white rounded-sm mt-4">Remove</button>
                </div>

                <div>
                    <h1>$30.00</h1>
                </div>
            </div>
            <hr class="pt-8 mt-8">
            <div class="flex items-start justify-between">
                <div class="flex gap-8 w-[50%]">
                    <img src="https://images.unsplash.com/photo-1551739440-5dd934d3a94a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                        alt="" class="w-[30%] md:w-[25%] rounded-sm object-cover">
                    <div>
                        <div class="flex flex-col items-start justify-between h-full">
                            <div>
                                <p class="text-lg ">Normad Tumbler</p>
                                <p class="text-lime-800">White</p>
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
                    <input type="number" class="bg-gray-200 px-4 py-2 w-16 outline-none" value="2"><br>
                    <button class="px-4 py-2 bg-red-500 hover:text-white rounded-sm mt-4">Remove</button>
                </div>

                <div>
                    <h1>$20.00</h1>
                </div>
            </div>
            <hr class="pt-8 mt-8">

        </div>
    </div>


</body>

</html>
