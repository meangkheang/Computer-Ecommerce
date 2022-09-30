@extends('layouts.layout')
@section('content')
    <div class="md:w-2/3 w-full mx-auto">
        <div class="xs:w-full text-center mt-8 py-4">
            <h1 class="uppercase text-2xl">Featured Categories</h1>
        </div>
        <div class="grid md:grid-cols-3 grid-cols-2 gap-1 md:gap-4 md:my-8 my-4 text-center">
            <div class="flex flex-col items-center p-8">
                <a href="/products/laptop " class="group">
                    <img src="{{ asset('images/asset/laptoplogo.png') }}" alt=""
                        class="rounded w-48 object-cover group-hover:scale-95 transition-all duration-200 delay-75 ">
                    <h1 class="text-lg">Laptop</h1>
                </a>
            </div>
            <div class="flex flex-col items-center p-8">
                <a href="/products/keyboard " class="group">
                    <img src="{{ asset('images/asset/keyboardlogo.png') }}" alt=""
                        class="rounded w-48 object-cover group-hover:scale-95 transition-all duration-200 delay-75 ">
                    <h1 class="text-lg">Keyboard</h1>
                </a>
            </div>
            <div class="flex flex-col items-center p-8">
                <a href="/products/laptop " class="group">
                    <img src="{{ asset('images/asset/mouselogo.png') }}" alt=""
                        class="rounded w-48 object-cover group-hover:scale-95 transition-all duration-200 delay-75 ">
                    <h1 class="text-lg">Mouse</h1>
                </a>
            </div>
            <div class="flex flex-col items-center p-8">
                <a href="/products/laptop " class="group">
                    <img src="{{ asset('images/asset/headphonelogo.png') }}" alt=""
                        class="rounded w-48 object-cover group-hover:scale-95 transition-all duration-200 delay-75 ">
                    <h1 class="text-lg">Headphone</h1>
                </a>
            </div>
            <div class="flex flex-col items-center p-8">
                <a href="/products/laptop " class="group">
                    <img src="{{ asset('images/asset/speakerlogo.png') }}" alt=""
                        class="rounded w-48 object-cover group-hover:scale-95 transition-all duration-200 delay-75 ">
                    <h1 class="text-lg">Speaker</h1>
                </a>
            </div>
        </div>
    </div>
    <hr>
@endsection
