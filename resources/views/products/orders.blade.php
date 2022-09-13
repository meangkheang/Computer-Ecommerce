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
    <title>Order List</title>
</head>

<body>
    @include('layouts.navbar')

    <div class="w-1/2 xs:w-[80%] mx-auto p-4 text-xl drop-shadow-lg m-8 bg-gray-50 rounded">
        <h1 class="pb-4">Shopping Cart</h1>
        
        <div class="w-full pt-4">

            <div class="p-4 flex gap-8 shadow-lg rounded border-gray-800 justify-center items-center xs:flex-col">
                <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" alt="" class="rounded w-26 object-cover h-48 w-96">
                <div class="pt-4">
                    <a href="/products" class="pb-4 inline-block hover:underline">Product title</a>
                    <p class="text-sm pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, reprehenderit! Repellendus magnam vel eius voluptas tenetur ratione. Nesciunt, repellendus adipisci est perferendis laboriosam optio itaque, aliquid quisquam dicta ducimus deleniti?</p>

                    <div class="border-t-2 text-sm pt-4 w-full flex justify-evenly items-center xs:flex-col gap-4">
                        <div>
                            <span>
                                Quantity : 
                            </span>
                            <input id="intputQnt" type="number" value="1"  max="10" maxlength="1" min="1" class="px-4 py-1.5 outline-none rounded bg-gray-200 text-md text-red-700">
                        </div>
                      

                        <div class="pl-4 w-auto">
                            <button class="bg-purple-800 px-4 py-1.5 rounded text-white hover:bg-purple-600">Save</button>
                            <button class="bg-red-800 px-4 py-1.5 rounded text-white hover:bg-red-600">Cancel</button>
                        </div>

                        <div>
                            <h1 id="totalPrice">
                                Total : $800
                            </h1>
                        </div>

                    </div>
                </div>
               
            </div>

        </div>

    </div>

</body>

</html>

<script>
    const input = document.getElementById('intputQnt');
    const totalPrice = document.getElementById('totalPrice');

    input.addEventListener('change',(e)=>{
        

        let total = parseInt(e.target.value) * 800 // mean 800 dollars per item
        if(total <= 0){
            // provent from using negative number
            input.value = 1;
        }else{
            totalPrice.textContent = "Total : $" + total;
        }

        
    });

</script>