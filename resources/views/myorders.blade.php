@extends('layouts.layout')
@section('content')
    
<div class="h-screen w-2/3 mx-auto mt-8 ">

    <h1 class="pb-4 text-2xl text-red-600">Pending Orders</h1>


    @forelse ($orders as $index=>$order)
        <div  class="bg-white shadow-lg p-4 rounded-md border mb-2">
            <div class="flex justify-between">
                <div class="flex flex-col gap-4">
                    <h1>ORDER ID : #{{ $order[0]->order_id }}</h1>
                    <p class="pb-4 text-slime-400 text-xs font-light"><span class="text-lime-800">Order date :</span> {{ date('d-M-Y', strtotime($order[0]->created_at)) }} | <span class="pl-4"> {{ $order[0]->created_at->diffForHumans() }}</span></p>
                </div>
                <button class="text-blue-400" id="showmore">more...</button>
            </div>
            <div id="content" class="mt-2 hidden">

                @foreach ($order as $item)
                

                    {{-- {{ $order->products }} --}}
                    <div class="py-2 flex justify-between items-center text-sm">
                        <div class="flex gap-8">
                            <img src="{{ $item->product->img }}" alt="" class="w-24 object-contain">
                            <div class="flex flex-col justify-around">
                                <h1 class="text-bold text-md">{{ $item->product->name }}</h1>
                                <p class="text-xs text-gray-500">Space Gray | 32 GB | 1 TB</p>
                            </div>
                        </div>
                        <div>
                            <p class="text-normal font-bold">${{ $item->total }}</p>
                            <p class="text-sm">Qtn: {{ $item->quantity }}</p>
                        </div>
                    </div>
                @endforeach
                    
            </div>
        </div>
    @empty
        <h1 class="text-2xl text-center font-bold">NO ORDERS</h1>
    @endforelse


</div>

<script>

    function showMore(){
        let show_buttons=  document.querySelectorAll('#showmore');

        for(let  i =0;i<show_buttons.length;i++){
            show_buttons[i].addEventListener('click',(e)=>{
                
                let show_more_content = document.querySelectorAll('#content');
                show_more_content[i].classList.toggle('hidden');
            });
        }
      
    }

    showMore();

</script>

@endsection