@extends('layouts.admin.layout')
@section('content')
    <div class="container mx-auto px-4 sm:px-8 mt-16 ">

        <div class="border-b flex justify-between p-4 items-center">
            <h3 class="text-xl font-bold">Update User</h3>
            <a href="/admin/allusers" class="hover:bg-blue-600 px-4 py-2 bg-blue-500 text-white rounded text-sm transition transform hover:-translate-y-0.5">Back</a>
        </div>



        @if(session()->has('message'))
            <div class="w-full bg-green-400 px-4 py-4  text-white text-sm">
                {{session('message')}}
            </div>
        @endif
        @foreach ($errors->all() as $error)
        <div class="w-full bg-red-400 px-4 py-4  text-white text-sm">{{ $error }}</div>
        @endforeach
        <form action="{{ route("admin.allusers.update",$user->id) }}"  method="post">
            @csrf
            <div class="p-8 bg-white shadow flex justify-center gap-4">
                
                <input placeholder="Username" 
                class="appearance-none rounded w-1/2 border border-gray-400 border-b block pl-8 pr-6 py-2  bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"  value="{{ $user->name }}" name="name"/>
                <br>
                <input placeholder="Email Address"  type="email" 
                class="appearance-none rounded  w-1/2 border border-gray-400 border-b block pl-8 pr-6 py-2  bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"  value="{{ $user->email }}" name="email"/>
                
                <input placeholder="Phone Number"  type="text" 
                class="appearance-none rounded  w-1/2 border border-gray-400 border-b block pl-8 pr-6 py-2  bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"  value="{{$user->phone_number }}" name="phone_number"/>
                <br>
                <button type="submit" class="px-4 py-2 rounded bg-blue-600 hover:bg-blue-700 text-white text-sm ">Update</button>
            </div>
        </form>

      
    </div>
@endsection