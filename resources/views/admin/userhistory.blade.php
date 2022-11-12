@extends('layouts.layout')
@section('content')

    <div class="w-2/3 mx-auto mt-8 overflow-y h-screen">

        <div class="header px-4 py-2 w-full flex justify-between">
            <h1 class="text-lg font-bold"><em>History Orders</em></h1>
            <a href="/admin/pending" class="rounded px-4 py-2 bg-red-600 text-white">Pending Order</a>
        </div>
        <div class="content">

            @forelse ($users as $user)
                <div class="px-4 py-4 border w-full mt-2">

                    <div class="flex justify-between px-4">
                        <h1 class="">{{ $user->name }}</h1>

                        <button id="showmore" class="px-4 py-2 bg-blue-600 rounded text-white">View</button>
                    </div>
                    <div id="content" class="hidden px-4 border-2 mt-2">

                       
                        @forelse ($user->orders as $order)
                         
                            {{-- {{ $order->products }} --}}
                            <div class="py-2 flex justify-between items-center text-sm">
                                <div class="flex gap-4 w-3/4">
                                    <img src="{{ asset('images/products/' .$order->product->img) }}" alt="" class="md:w-[5rem] object-cover">
                                    <div class="flex flex-col justify-around">
                                        <h1 class="text-bold text-md">{{ $order->product->name }}</h1>
                                        <p class="text-xs text-gray-500">{{ $order->product->description }}</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end w-1/4">
                                    <p class="text-normal font-bold">${{ $order->total }}</p>
                                    <p class="text-sm">Qtn: {{ $order->quantity }}</p>
                                </div>
                            </div>

                        @empty

                            <h1 class="text-semibold text-lg">No orders</h1>
                        @endforelse

                    </div>
                </div>
            @empty
                <h1 class="text-center font-bold text-lg">Empty</h1>
            @endforelse

        </div>



    </div>

    <script>
        function showMore() {
            let show_buttons = document.querySelectorAll('#showmore');

            for (let i = 0; i < show_buttons.length; i++) {
                show_buttons[i].addEventListener('click', (e) => {

                    let show_more_content = document.querySelectorAll('#content');
                    show_more_content[i].classList.toggle('hidden');
                });
            }

        }

        showMore();
    </script>

@endsection
