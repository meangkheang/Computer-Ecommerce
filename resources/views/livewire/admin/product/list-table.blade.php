<div class="container mx-auto px-4 sm:px-8 ">
    <div class="py-8">
        <div>
            <h2 class="text-2xl font-semibold leading-tight">Products</h2>
        </div>
        <div class="my-2 flex items-center justify-between">
            <div class="">

                <div class="flex gap-4 items-center ">
                    <input placeholder="Search" 
                        class="appearance-none rounded border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"  />
                    
                        <div>
                        <label for="">Type</label>
                        <select name="" id="" class="px-4 py-2 border rounded" wire:model='product_type'>
                            <option value="laptop">Laptop</option>
                            <option value="mouse">Mouse</option>
                            <option value="keyboard">Keyboard</option>
                            <option value="speaker">Speaker</option>
                            <option value="headphone">Headphone</option>
                        </select>
                      </div>  
                      <div>
                        <label for="">Brand</label>
                        <select name="" id="" class="px-4 py-2 border rounded" wire:model='selected_brand'>
                            @foreach($product_brand as $brand)
                            <option {{ $loop->first ? 'selected' : '' }} value="{{ $brand }}">{{ $brand }}</option>
                            @endforeach
                        </select>
                      </div>  
                </div>
                

            </div>
           <div>
                <a href="/admin/products/add" class="text-sm px-2 py-2 bg-blue-600 text-white rounded">New Product</a>
           </div>
        </div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                @if(session()->has('message'))
                <div class="w-full bg-green-400 px-4 py-4  text-white text-sm">
                    {{session('message')}}
                </div>
                 @endif
                <table class="min-w-full leading-normal ">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Name
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Image
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Description
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Price
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Brand
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Type
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Review
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Rate
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Discount
                            </th>
                         
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody >
                       
                        @forelse ($products as $item)
                            <tr>
                              
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $item->name }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $item->img }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ strlen($item->description) > 10 ?  substr($item->description,0,9). '...' :  $item->description }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $item->price }}$
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="whitespace-no-wrap bg-indigo-600  py-1 text-white pl-4">
                                        {{ $item->brand }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class=" whitespace-no-wrap bg-blue-600  py-1 text-white pl-4 ">
                                        {{ $item->type }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $item->review }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $item->rate }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $item->discount }}
                                    </p>
                                </td>
                                <td class="px-5 py-5  border-gray-200 bg-white text-sm ">
                                    <div class="shrink-0 flex items-center gap-2">
                                        <a href="{{ route('admin.products.show', $item->id) }}" class="px-4 py-2 rounded hover:bg-green-800 bg-green-600 text-white" >View</a>
                                        <a href="#" class="px-4 py-2 rounded hover:bg-green-800 bg-blue-600 text-white" >Edit</a>
                                        <a href="{{ route('admin.products.destroy',$item->id) }}" class="px-4 py-2 rounded hover:bg-green-800 bg-red-600 text-white" >Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <td class="px-5 font-bold py-5 border-b border-gray-200 bg-white text-sm text-center" colspan="13">
                                No Product
                            </td>
                        @endforelse
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
   
</div>
