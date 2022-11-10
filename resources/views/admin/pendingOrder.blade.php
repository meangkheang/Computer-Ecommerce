@extends('layouts.layout')
@section('content')
    <div class="w-2/3 mx-auto mt-8 h-screen">
        <div class="header px-4 py-2 w-full flex justify-between">
            <h1 class="text-lg font-bold"><em>Pending Orders</em></h1>
            <a href="/admin/users" class="rounded px-4 py-2 bg-red-600 text-white">History</a>
        </div>
        <div class="content">
            @forelse ($pending as $item)
                <div class="px-4 py-4 border w-full mt-2">
                    <div class="flex justify-between px-2">
                        <h1 class="">{{ $item->name }}</h1>
                        <div>
                            <button id="showmore"
                                class="px-4 py-2 hover:bg-blue-800 bg-blue-600 rounded text-white">View</button>
                            <a href="" class="rounded px-4 py-2 bg-green-700 hover:bg-green-800 text-white">Done</a>
                        </div>
                    </div>
                    <div id="content" class="hidden px-4 mt-2 border-2 ">
                        {{-- {{ $order->products }} --}}

                        @for ($i = 0; $i < count($item); $i++)
                            @forelse ($pending[$i]->orders as $order)
                                <div class="py-2 flex justify-between items-center text-sm">
                                    <div class="flex gap-6 w-3/4">
                                        <img src="{{ $order->product->img }}" alt=""
                                            class="md:w-[5rem] object-cover">
                                        <div class="flex flex-col justify-around">
                                            <h1 class="text-bold text-md">{{ $order->product->name }}</h1>
                                            <p class="text-xs text-gray-500">{{ $order->product->description }}</p>
                                        </div>
                                    </div>
                                    <div class="w-1/4 flex flex-col items-end">
                                        <p class="text-normal font-bold">${{ $order->total }}</p>
                                        <p class="text-sm">Qtn: {{ $order->quantity }}</p>
                                    </div>
                                </div>
                            @empty
                                No Orders
                            @endforelse
                        @endfor


                    </div>
                </div>
                @empty
                    No Pending Orders
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
