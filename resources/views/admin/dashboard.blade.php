@extends('layouts.layout')
@section('content')
    <div class="md:w-2/3 w-full mx-auto overflow-hidden h-[90%]">
        <div class="xs:w-full text-center mt-8 py-4">
            <h1 class="uppercase text-2xl">Manage</h1>
        </div>
        <div class="grid md:grid-cols-3 grid-cols-2 gap-1 md:gap-4 md:my-8 my-4 text-center">
            <div class="flex flex-col items-center p-8">
                <a href="/admin " class="group">
                    <img src="{{ asset('images/asset/box.png') }}" alt=""
                        class="rounded w-48 object-cover group-hover:scale-95 transition-all duration-200 delay-75 ">
                    <h1 class="text-lg">Add Product</h1>
                </a>
            </div>
            <div class="flex flex-col items-center p-8">
                <a href="/admin/edit " class="group">
                    <img src="{{ asset('images/asset/box.png') }}" alt=""
                        class="rounded w-48 object-cover group-hover:scale-95 transition-all duration-200 delay-75 ">
                    <h1 class="text-lg">Edit Product</h1>
                </a>
            </div>
            <div class="flex flex-col items-center p-8">
                <a href="/admin/pending " class="group">
                    <img src="{{ asset('images/asset/clipboard.png') }}" alt=""
                        class="rounded w-48 object-cover group-hover:scale-95 transition-all duration-200 delay-75 ">
                    <h1 class="text-lg">View Order</h1>
                </a>
            </div>
            <div class="flex flex-col items-center p-8">
                <a href="/admin/allusers " class="group">
                    <img src="{{ asset('images/asset/people.png') }}" alt=""
                        class="rounded w-48 object-cover group-hover:scale-95 transition-all duration-200 delay-75 ">
                    <h1 class="text-lg">Manage User</h1>
                </a>
            </div>
            <div class="flex flex-col items-center p-8">
                <a href="/products/speaker" class="group">
                    <img src="{{ asset('images/asset/settings.png') }}" alt=""
                        class="rounded w-48 object-cover group-hover:scale-95 transition-all duration-200 delay-75 ">
                    <h1 class="text-lg">Setting</h1>
                </a>
            </div>
        </div>
    </div>
@endsection
