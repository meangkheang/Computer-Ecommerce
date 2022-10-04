@extends('layouts.layout')
@section('content')
    
<div class="mx-auto w-2/3 h-[60vh] mt-8">

    <div class="flex justify-between">
        <a href="/myorders" class="rounded px-4 py-2 bg-blue-600 text-white">Order History</a>
        <a href="/auth/logout" class="rounded px-4 py-2 bg-red-600 text-white">Log out</a>

    </div>

</div>

@endsection