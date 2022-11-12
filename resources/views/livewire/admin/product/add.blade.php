<div class="mx-auto w-full mt-4 ">


    <form action="/admin" method="post" class="mt-8 w-1/2 mx-auto flex flex-col gap-3" wire:submit.prevent="save">
        @csrf

        @error('product_name') <span class="px-4 text-xs  py-2 bg-red-500 text-white">{{ $message }}</span> @enderror
        <label for="" class="mt-4 text-sm">Product Name</label>
        <input class="w-full text-sm rounded-lg px-4 py-3 outline-none border" type="text"
            placeholder="Product name" name="name" wire:model="product_name">

        @error('photo_thumnail') <span class="px-4 text-xs  py-2 bg-red-500 text-white">{{ $message }}</span> @enderror
        <label for="" class="mt-4 text-sm">Product Icon</label>
        <input class="w-full text-sm rounded px-4 file:p-2 file:rounded file:bg-indigo-400 file:text-white file:ring-0 file:border-none py-2 outline-none file:mr-4 " id="file_input"
            type="file" wire:model='photo_thumnail'>

        @error('photo_preview_1') <span class="px-4 text-xs  py-2 bg-red-500 text-white">{{ $message }}</span> @enderror
        <label for="" class="mt-4 text-sm">1 Proview Image</label>
        <input type="file" class="w-full text-sm rounded px-4 file:p-2 file:rounded file:bg-indigo-400 file:text-white file:ring-0 file:border-none py-2 outline-none file:mr-4 "
            type="file" placeholder="thumnail privew 1" name="product_side[]" wire:model='photo_preview_1'>

        @error('photo_preview_2') <span class="px-4 text-xs  py-2 bg-red-500 text-white">{{ $message }}</span> @enderror
        <label for="" class="mt-4 text-sm">2 Proview Image</label>
        <input type="file" class="w-full text-sm rounded px-4 file:p-2 file:rounded file:bg-indigo-400 file:text-white file:ring-0 file:border-none py-2 outline-none file:mr-4 "
            type="file" placeholder="thumnail preview 2" name="product_side[]" wire:model='photo_preview_2'>


        @error('photo_preview_3') <span class="px-4 text-xs  py-2 bg-red-500 text-white">{{ $message }}</span> @enderror
        <label for="" class="mt-4 text-sm">3 Proview Image</label>
        <input type="file" class="w-full text-sm rounded px-4 file:p-2 file:rounded file:bg-indigo-400 file:text-white file:ring-0 file:border-none py-2 outline-none file:mr-4 "
            type="file" placeholder="thumnail preview 3" name="product_side[]" wire:model='photo_preview_3'>

        @error('product_description') <span class="px-4 text-xs  py-2 bg-red-500 text-white">{{ $message }}</span> @enderror
        <label for="" class="mt-4 text-sm">Product Description</label>
        <textarea name="" id="" cols="30" rows="6"class="w-full text-sm rounded px-3 py-2 outline-none border" wire:model="product_description"> 

        </textarea>

        @error('product_price') <span class="px-4 text-xs  py-2 bg-red-500 text-white">{{ $message }}</span> @enderror
        <label for="" class="mt-4 text-sm">Product Price</label>
        <input class="w-full text-sm rounded px-4 py-3 outline-none  border " type="text"
            placeholder="Product price" name="price" wire:model="product_price">

        @error('product_discount') <span class="px-4 text-xs  py-2 bg-red-500 text-white">{{ $message }}</span> @enderror
        <label for="" class="mt-4 text-sm">Product Discount</label>
        <input class="w-full text-sm rounded px-4 py-3 outline-none  border " type="text"
            placeholder="Product discount" name="discount" wire:model="product_discount">

        <div>
            <label for="" class="mr-4">Product's Type</label>
            <select id="" name="type" wire:model="product_type">
                <option value="laptop">Laptop</option>
                <option value="mouse">Mouse</option>
                <option value="keyboard">Keyboard</option>
                <option value="speaker">Speaker</option>
                <option value="headphone">Headphone</option>
            </select>
        </div>
        
        <div>
            <label for="" class="mr-4 ">Product's Brand</label>
            <select id="" name="brand" wire:model="selected_brand">
                @foreach($product_brand as $brand)
                    <option {{ $loop->first ? 'selected' : '' }} value="{{ $brand }}">{{ $brand }}</option>
                @endforeach
               
            </select>
        </div>
        @error('product_review') <span class="px-4 text-xs  py-2 bg-red-500 text-white">{{ $message }}</span> @enderror
        <label for="" class="mr-4 text-sm mt-4">Product's Review</label>
        <input class="w-full text-sm rounded px-4 py-3 outline-none  border " type="text"
            placeholder="Product's Review" name="review" wire:model="product_review">
       
        @error('product_rate') <span class="px-4 text-xs  py-2 bg-red-500 text-white">{{ $message }}</span> @enderror
        <label for="" class="mr-4 text-sm mt-4">Product's Rate</label>
        <input class="w-full text-sm rounded px-4 py-3 outline-none  border " type="text"
            placeholder="Product's Rate: ex: 0 to 5 only" name="rate" wire:model="product_rate">

        <button type="submit" class="px-2 py-2 w-1/5 mx-auto text-sm bg-indigo-600 text-white rounded">Add Product</button>
    </form>

</div>