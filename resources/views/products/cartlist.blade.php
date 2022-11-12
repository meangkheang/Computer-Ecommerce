<!DOCTYPE html>
<html lang="en">

@include('links.headerlinks',['title' => 'Cart List'])

<body>

    @include('layouts.navbar')
    <!-- component -->
    @include('layouts.popupmsg')

    <div class="w-[80%] mx-auto md:w-1/1.5 h-screen my-10 ">
        <div class="flex justify-between px-4">
            <h1 class="text-md md:text-2xl  font-bold font-sans pb-8 ">Shopping Cart ({{ count($cart_projects) }})</h1>
            <div>
                @if (session('cart_count') >0)
                    <button onclick="document.getElementById('quantity_form').submit()"  type="submit" class="inline-block rounded px-4 py-2 text-sm bg-blue-600  text-white ">Check out</button>
                @endif
            </div>
        </div>
        
        <hr class="pt-8">

        <div class="">

            <form action="/checkoutPayment" id="quantity_form">
            <input type="hidden" name="total" id="total">
            @forelse ($cart_projects as $item)
            
            <div class="flex items-start justify-between">
                <div class="flex gap-8 w-[50%]">
                    <img src="{{ asset('images/products/' . $item->product->img) }}"
                        alt="{{ asset('images/products/' .$item->product->img ) }}" class="w-[30%] md:w-[5rem] rounded-sm object-contain">
                    <div>
                        <div class="flex flex-col items-start justify-between h-full">
                            <div>
                                <p class="text-lg ">{{ $item->product->name }}</p>
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
                    <input type="number" class="bg-gray-200 px-4 py-2 w-24 outline-none" value="{{ $item->quantity }}" name="quantity[]" id="quantity"><br>
                 

                    <a href="/cartlist/delete/{{ $item->id }}" type="submit" class="inline-block px-4 py-2 bg-red-500 hover:text-black rounded-sm mt-4 text-white ">Remove</a>
                    
                </div>

                <div>
                        <h1 id="item_total">${{ $item->product->price * $item->quantity }}</h1>
                </div>
            </div>
            <hr class="pt-8 mt-8">
            @empty
            <img src="https://shop.millenniumbooksource.com/static/images/cart1.png" alt="" class="mx-auto w-1/2">
            @endforelse
          
            </form>

        </div>
        @if (count($cart_projects)>0)
            <h1 class="text-xl text-right font-bold" id="total_checkout">Total : </h1>
        @endif
    </div>


</body>
</html>

<script>
    let total_checkout = document.getElementById('total_checkout');
    let quantityElments = document.querySelectorAll('#quantity');
    let item_totalElments = document.querySelectorAll('#item_total');
    let item_initialPrice = [];

    for(let x= 0;x<quantityElments.length;x++){

        let item_total = parseFloat(item_totalElments[x].textContent.substring(1));
        let item_quantity = parseInt(quantityElments[x].value);

        //price for one product
        item_initialPrice.push(item_total/item_quantity);
    }


    for (let index = 0; index < quantityElments.length; index++) {

      

        quantityElments[index].addEventListener('change',function(e){
            
            e.preventDefault();

            let item_quantity = parseInt(quantityElments[index].value);
            let item_total = parseInt((item_initialPrice[index] * item_quantity).toFixed(2));

            if(quantityElments[index].value == 0 ) {
                quantityElments[index].value = 1;
                item_totalElments[index].textContent = '$' + item_initialPrice[index]
                return;
            }
            

            item_totalElments[index].textContent = '$' +  (item_initialPrice[index] * item_quantity).toFixed(2);
            calculateTotal();

        });
    }

  
    function calculateTotal(){
        let count = 0.0;
        for(let x =0;x<item_initialPrice.length;x++){
            let item_total = parseFloat(item_initialPrice[x] * parseInt(quantityElments[x].value).toFixed(2))
            count += item_total;
            
        }

        total_checkout.textContent = "Total : " + '$' + count.toFixed(2);
        document.getElementById('total').value = count;
    }
    calculateTotal();
   
    
</script>
