@extends('layouts.layout')
@section('content')
    <div class="mx-auto w-2/3 mt-4 h-[100vh]">
        <h1 class="text-2xl font-bold text-center">Add Products</h1>

        <form action="/admin" method="post" class="mt-8 w-1/2 mx-auto flex flex-col gap-3">
            @csrf
            <input class="w-full text-sm rounded px-3 py-2 outline-none  border-blue-400 border-2" type="text" placeholder="Product name" name="name">
            <input class="w-full text-sm rounded px-3 py-2 outline-none  border-blue-400 border-2" type="text" placeholder="thumnail url" name="img">
            <input class="w-full text-sm rounded px-3 py-2 outline-none  border-blue-400 border-2" type="text" placeholder="thumnail privew 1" name="product_side[]">
            <input class="w-full text-sm rounded px-3 py-2 outline-none  border-blue-400 border-2" type="text" placeholder="thumnail preview 2" name="product_side[]">
            <input class="w-full text-sm rounded px-3 py-2 outline-none  border-blue-400 border-2" type="text" placeholder="thumnail preview 3" name="product_side[]">
            <input class="w-full text-sm rounded px-3 py-2 outline-none  border-blue-400 border-2" type="text" placeholder="Product description" name="description">
            <input class="w-full text-sm rounded px-3 py-2 outline-none  border-blue-400 border-2" type="text" placeholder="Product price" name="price">
            <input class="w-full text-sm rounded px-3 py-2 outline-none  border-blue-400 border-2" type="text" placeholder="Product discount" name="discount">

            <div>
                <label for="" class="mr-4">Product's Type</label>
                <select  id="" name="type">
                    <option value="laptop">Laptop</option>
                    <option value="mouse">Mouse</option>
                    <option value="keyboard">Keyboard</option>
                    <option value="speaker">Speaker</option>
                    <option value="headphone">Headphone</option>
                </select>
            </div>
            <div>
                <label for="" class="mr-4">Product's Brand</label>
                <select  id="" name="brand">
                    <option value="asus">Asus</option>
                    <option value="dell">Dell</option>
                    <option value="predictor">Predictor</option>
                    <option value="predictor">Logitech</option>
                    <option value="msi">MSI</option>
                    <option value="rog">Rog</option>
                    <option value="razer">Razer</option>
                </select>
            </div>

            <input class="w-full text-sm rounded px-3 py-2 outline-none  border-blue-400 border-2" type="text" placeholder="Product's Review" name="review">
            <input class="w-full text-sm rounded px-3 py-2 outline-none  border-blue-400 border-2" type="text" placeholder="Product's Rate: ex: 0 to 5 only" name="rate">

            <button type="submit" class="px-4 py-2 bg-indigo-400 rounded">Add Product</button>
        </form>
    </div>
@endsection