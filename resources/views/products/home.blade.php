@extends('layouts.layout')
@section('content')
    <div class="md:w-2/3 w-full mx-auto">
        <div class="xs:w-full text-center mt-8 py-4">
            <h1 class="uppercase text-2xl">Featured Categories</h1>
        </div>
        <div class="grid md:grid-cols-3 grid-cols-2 gap-1 md:gap-4 md:my-8 my-4 text-center">
            <div class="flex flex-col items-center p-8">
                <a href="/products/filter?type=laptop" class="group">
                    <img src="{{ asset('images/asset/laptoplogo.png') }}" alt=""
                        class="rounded w-48 object-cover group-hover:scale-95 transition-all duration-200 delay-75 ">
                    <h1 class="text-lg">Laptop</h1>
                </a>
            </div>
            <div class="flex flex-col items-center p-8">
                <a href="/products/filter?type=keyboard" class="group">
                    <img src="{{ asset('images/asset/keyboardlogo.png') }}" alt=""
                        class="rounded w-48 object-cover group-hover:scale-95 transition-all duration-200 delay-75 ">
                    <h1 class="text-lg">Keyboard</h1>
                </a>
            </div>
            <div class="flex flex-col items-center p-8">
                <a href="/products/filter?type=mouse" class="group">
                    <img src="{{ asset('images/asset/mouselogo.png') }}" alt=""
                        class="rounded w-48 object-cover group-hover:scale-95 transition-all duration-200 delay-75 ">
                    <h1 class="text-lg">Mouse</h1>
                </a>
            </div>
            <div class="flex flex-col items-center p-8">
                <a href="/products/filter?type=headphone" class="group">
                    <img src="{{ asset('images/asset/headphonelogo.png') }}" alt=""
                        class="rounded w-48 object-cover group-hover:scale-95 transition-all duration-200 delay-75 ">
                    <h1 class="text-lg">Headphone</h1>
                </a>
            </div>
            <div class="flex flex-col items-center p-8">
                <a href="/products/filter?type=speaker" class="group">
                    <img src="{{ asset('images/asset/speakerlogo.png') }}" alt=""
                        class="rounded w-48 object-cover group-hover:scale-95 transition-all duration-200 delay-75 ">
                    <h1 class="text-lg">Speaker</h1>
                </a>
            </div>
        </div>
    </div>
    <hr>
    <div class="w-full my-8">
        <div class="xs:w-full text-center">
            <h1 class="uppercase text-2xl">Sales</h1>
        </div>
        <div class="swiper">
            <div class="flex shrink-0 grow gap-8 mx-5 my-5 lg:mx-48 overflow-x-scroll sm:mx-14 scrollbar lg:p-5"
                id="slider">
                <div class="xs:mb-6 cursor-pointer shrink-0 w-1/2 sm:w-1/4 ">
                    <a href="/products/">
                        <img src="https://images.unsplash.com/photo-1611078489935-0cb964de46d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                            alt=""
                            class="rounded lg:h-96 h-40 object-cover w-full hover:scale-105 transition-all duration-200 delay-75 ">
                    </a>
                    <div class="flex flex-col justify-between items-start">
                        <h1 class="text-center mt-4 text-md pl-4">Asus Gaming Laptop</h1>
                        <span class="text-center mt-2 text-md pl-4 text-red-500">20%</span>
                    </div>
                </div>


                <div class=" xs:mb-6 cursor-pointer shrink-0 w-1/2 sm:w-1/4">
                    <img src="https://images.unsplash.com/photo-1626958390898-162d3577f293?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                        alt=""
                        class="rounded lg:h-96 h-40 object-cover w-full hover:scale-105 transition-all duration-200 delay-75">
                    <div class="flex flex-col justify-between items-start">
                        <h1 class="text-center mt-4 text-md pl-4">Gaming Keyboard</h1>
                        <span class="text-center mt-2 text-md pl-4 text-red-500">20%</span>
                    </div>

                </div>

                <div class="xs:mb-6 cursor-pointer shrink-0 w-1/2 sm:w-1/4 ">
                    <img src="https://images.unsplash.com/photo-1527814050087-3793815479db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1928&q=80"
                        alt=""
                        class="rounded lg:h-96 h-40 object-cover w-full hover:scale-105 transition-all duration-200 delay-75">
                    <div class="flex flex-col justify-between items-start">
                        <h1 class="text-center mt-4 text-md pl-4">Logitech Mouse</h1>
                        <span class="text-center mt-2 text-md pl-4 text-red-500">20%</span>
                    </div>
                </div>


                <div class=" xs:mb-6 cursor-pointer shrink-0  w-1/2 sm:w-1/4 ">
                    <img src="https://images.unsplash.com/photo-1504274066651-8d31a536b11a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80"
                        alt=""
                        class="rounded lg:h-96 h-40 object-cover w-full hover:scale-105 transition-all duration-200 delay-75">
                    <div class="flex flex-col justify-between items-start">
                        <h1 class="text-center mt-4 text-md pl-4">IOS Headphone</h1>
                        <span class="text-center mt-2 text-md pl-4 text-red-500">20%</span>
                    </div>

                </div>

                <div class="xs:mb-6 cursor-pointer shrink-0 w-1/2 sm:w-1/4 ">
                    <img src="https://images.unsplash.com/photo-1644767479973-a053733ef283?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                        alt=""
                        class="rounded lg:h-96 h-40 object-cover w-full hover:scale-105 transition-all duration-200 delay-75">
                    <div class="flex flex-col justify-between items-start">
                        <h1 class="text-center mt-4 text-md pl-4">Razer Microphone</h1>
                        <span class="text-center mt-2 text-md pl-4 text-red-500">20%</span>
                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection
