@extends('layouts.admin.layout')
@section('content')
    <div class="container mx-auto px-4 sm:px-8 mt-16 ">

        <div class="border-b flex justify-between p-4 items-center">
            <h3 class="text-xl font-bold">Delete User</h3>
            <a href="/admin/allusers" class="hover:bg-blue-600 px-4 py-2 bg-blue-500 text-white rounded text-sm transition transform hover:-translate-y-0.5">Back</a>
        </div>



   
 
        <form action="{{ route("admin.allusers.remove",$user->id) }}"  method="post">
            @csrf
            <div class="p-8 bg-white shadow flex justify-center gap-4 items-center">
                <h1>Are you want to delete this user ?</h1>
                <a href="{{ route('admin.allusers') }}" class="px-4 py-2 rounded bg-blue-600 hover:bg-blue-700 text-white text-sm ">Cancel</a>
                <button type="submit"  class="px-4 py-2 rounded bg-red-600 hover:bg-red-700 text-white text-sm ">Delete</a>
            </div>
        </form>

      
    </div>
@endsection