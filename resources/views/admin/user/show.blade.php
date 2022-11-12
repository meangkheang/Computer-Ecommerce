@extends('layouts.admin.layout')
@section('content')
    <div class="container mx-auto px-4 sm:px-8 mt-16 ">

        <div class="border-b flex justify-between p-4 items-center">
            <h3 class="text-xl font-bold">View User</h3>
            <a href="/admin/allusers" class="hover:bg-blue-600 px-4 py-2 bg-blue-500 text-white rounded text-sm transition transform hover:-translate-y-0.5">Back</a>
        </div>


        <div class="p-8 bg-white shadow ">
            
            <div class=" text-center border-b pb-12">
                <h1 class="text-4xl font-medium text-gray-700">{{ $user->name }}</h1>
                <p class="font-light text-gray-600 mt-3">{{ $user->email }}</p>
                
            </div>
        </div>


    </div>
@endsection