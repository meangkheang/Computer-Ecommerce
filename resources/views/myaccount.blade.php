@extends('layouts.layout')
@section('content')
    
<div class="mx-auto w-2/3 h-[60vh] mt-8">

    <div class="flex justify-between">

        @if(session()->has('user'))
            @if(session('user.email') != 'admin@admin.com' && session('user.password') != 'password')
            <a href="/myorders" class="rounded px-4 py-2 bg-blue-600 text-white">Order History</a>
                
            @endif
        @endif
        <a href="/auth/logout" class="rounded px-4 py-2 bg-red-600 text-white">Log out</a>

    </div>

</div>

@endsection