<nav class="shadow-2xl flex items-center w-full justify-between md:justify-around">
    <a href="/">
        <span class="sm:pl-4 text-xl p-4 md:p-0">C<span class="text-red-600">E</span>CM</span>
        {{-- <img src="" alt="" class="w-6 rounded"> --}}
    </a>

    <div class="md:flex transition ease-in-out duration-500 font-md list-none hidden">
        <li class="p-4  hover:text-white hover:bg-red-600"><a href="#">Home</a></li>
        <li class="p-4 hover:text-white hover:bg-red-600"><a href="#about">About</a></li>
        <li class="p-4  hover:text-white hover:bg-red-600"><a href="#sales">Sales</a></li>
        <li class="p-4  hover:text-white hover:bg-red-600"><a href="">Shop</a></li>
        <li class="p-4 hover:text-white hover:bg-red-600"><a href="">Contact</a></li>
    </div>

    <div class="gap-6 md:flex items-center hidden">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
            class="bi bi-search hover:text-red-600" viewBox="0 0 16 16">
            <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
        </svg>
       
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                class="bi bi-cart-plus-fill hover:text-red-600" viewBox="0 0 16 16">
                <path
                    d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z" />
            </svg>
        </a>

        <a href="@if(session('name')) / @else /auth/  @endif" class="flex gap-2 w-full ">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                class="bi bi-person-fill hover:text-red-600" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg>
            <p>
                @if(session('name'))
                {{ session('name') }}
                @else
                Bot
                @endif
            </p>
            @if(session('name'))
            <a href="/auth/logout" class="text-sm inline-block">Log out</a>
            @endif
            
        </a>

        

    </div>


    <div class="md:hidden p-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hover:text-red-600" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </div>

</nav>

<script></script>
