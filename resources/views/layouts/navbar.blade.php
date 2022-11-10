<nav class="flex items-center w-full justify-between md:justify-around ">
    <a href="/" class="p-4">
        <span class="sm:pl-4 text-xl md:p-4">C<span class="text-red-600">E</span>CM</span>
        {{-- <img src="" alt="" class="w-6 rounded"> --}}
    </a>

    <div class="md:flex transition ease-in-out duration-500 font-md list-none hidden" id="menuLink">
        <li class="p-4  hover:text-white hover:bg-red-600"><a href="/">Home</a></li>
        <li class="p-4 hover:text-white hover:bg-red-600"><a href="/about">About</a></li>
        <li class="p-4  hover:text-white hover:bg-red-600"><a href="/#sales">Sales</a></li>
        <li class="p-4  hover:text-white hover:bg-red-600"><a href="/products">Shop</a></li>
        <li class="p-4 hover:text-white hover:bg-red-600"><a href="/contact">Contact</a></li>


        @if (session()->has('user') &&
            (session('user.email') == 'admin@admin.com' && session('user.password') == 'secret'))
            <li class="p-4 hover:text-white hover:bg-red-600"><a href="/admin/dashboard">Manage</a></li>
        @endif




        @if (session()->has('user'))
            {{-- <li class="p-4 hover:text-white hover:bg-red-600"><a href="/myorders">My Order</a></li> --}}
        @endif

    </div>
    <form action="/products/all" id="searchBox" class="hidden w-[406px] relative" method="get">
        <input type="text" class="border  outline-none bg-gray-200  rounded w-full p-2 text-sm"
            placeholder="Search..." name="search">
        <a href="#" id="search1" class="hover:text-red-600 absolute top-2 md:-right-6 right-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="26" fill="currentColor" class="bi bi-x-lg"
                viewBox="0 0 16 16">
                <path
                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
            </svg>
        </a>
    </form>
    <div class="gap-4 md:flex items-center hidden relative">

        <a href="#" id="search" class="hover:text-red-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                class="bi bi-search " viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
        </a>
        <a href="/whitelist" class="hover:text-red-600 flex gap-2">
            <p class="pt-[2px]">
                @if (session()->has('whitelist_count'))
                    {{ session('whitelist_count') }}
                @else
                    0
                @endif
            </p>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                <path
                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                <path
                    d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z" />
            </svg>
        </a>

        <a href="/cartlist" class="hover:text-red-600 flex gap-2">
            <p class="pt-[2px]">
                @if (session()->has('cart_count'))
                    {{ session('cart_count') }}
                @else
                    0
                @endif
            </p>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-bag "
                viewBox="0 0 16 16">
                <path
                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
            </svg>
        </a>

        <a href="{{ session('user') ? '/myaccount' : '/auth/' }}" class="flex gap-2 items-center hover:text-red-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                class="bi bi-person-circle " viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
            @if (session()->has('user'))
                <h1 class="text-xl pt-0">{{ session('user') ? session('user.name') : ' Sign in' }}</h1>
            @endif
            {{-- @if (session()->has('user'))
                <h1 class="text-xl pt-0">{{ session('user') ? session('user.name') : ' Sign in' }}</h1>
                <a href="/auth/logout" class="rounded px-4 py-2 bg-red-600 text-white">Log out</a>
            @endif --}}
        </a>

    </div>


    {{-- phone view --}}
    <div class="md:hidden p-4 flex gap-3">


        <a href="#" class="hover:text-red-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="21" fill="currentColor" class="bi bi-bag "
                viewBox="0 0 16 16">
                <path
                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
            </svg>
        </a>
        <a href="#" class="hover:text-red-600" id="menuBtn"><svg xmlns="http://www.w3.org/2000/svg"
                class="w-6 h-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg></a>
    </div>
    <div class="fixed top-0 left-0 right-0 bottom-0 z-50 w-full h-full md:hidden hidden" id="menu">
        <div class="bg-black opacity-80 w-full h-[100vh] fixed top-0 md:hidden">
        </div>

        <div class="absolute right-0 md:hidden ss:w-80 w-56 top-0 h-[100vh] bg-white z-30 ">
            <div class="flex flex-col flex-start gap-4 m-4 h-full relative">
                <a href="{{ session('name') ? '/' : '/auth/' }}" class="flex gap-2 items-center hover:text-red-600"
                    id="loginBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-person-circle " viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                    <h1 class="text-xl pt-0">{{ session('name') ? session('name') : ' Sign in' }}</h1>
                </a>
                <hr>
                <div class="flex gap-2 items-center">
                    <a href="" class="hover:text-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>

                    </a>
                    <form action="/products" class="w-full">
                        <input type="text" class="border rounded p-1 w-full text-xs sm:text-base"
                            placeholder="search...">
                    </form>
                </div>
                <a href="/cartlist" class="hover:text-red-600 flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="bi bi-bag " viewBox="0 0 16 16">
                        <path
                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                    </svg>
                    <h2>2</h2>
                </a>
                <hr>
                <div class="flex-col transition ease-in-out duration-500 font-md list-none">
                    <li class="py-3  hover:text-white hover:bg-red-600"><a href="/">Home</a></li>
                    <li class="py-3 hover:text-white hover:bg-red-600"><a href="/about">About</a></li>
                    <li class="py-3  hover:text-white hover:bg-red-600"><a href="#sales">Sales</a></li>
                    <li class="py-3  hover:text-white hover:bg-red-600"><a href="/products">Shop</a></li>
                    <li class="py-3 hover:text-white hover:bg-red-600"><a href="/contact">Contact</a></li>
                    {{-- <li class="py-3 hover:text-white hover:bg-red-600"><a href="/myorders">My Order</a></li> --}}


                    @if (session('name'))
                        <li class="py-3 hover:text-white hover:bg-red-600 bg-red-700 text-center rounded text-white"><a
                                href="/auth/logout">Log Out</a></li>
                    @endif
                </div>

            </div>
            <div class="top-0 absolute -left-8 my-4 md:hidden">
                <a href="#" id="btnClose" class="py-4"><svg xmlns="http://www.w3.org/2000/svg"
                        width="26" height="26" fill="currentColor" class="bi bi-x-lg text-white"
                        viewBox="0 0 16 16">
                        <path
                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                    </svg></a>
            </div>

        </div>

    </div>

</nav>


<script>
    const btnMenu = document.getElementById('menuBtn');
    const btnClose = document.getElementById('btnClose');
    const menu = document.getElementById('menu');
    const search = document.getElementById('search');
    const search1 = document.getElementById('search1');
    const searchBox = document.getElementById('searchBox');
    const loginBtn = document.getElementById('loginBtn');
    const menuLink = document.getElementById('menuLink');
    const body = document.body;


    loginBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    })
    btnMenu.addEventListener('click', () => {
        menu.classList.remove('hidden');
        btnClose.classList.remove('hidden');
        body.classList.add('overflow-hidden');


    });
    btnClose.addEventListener('click', () => {
        menu.classList.add('hidden');
        btnClose.classList.add('hidden');
        body.classList.remove('overflow-hidden');
    })
    search.addEventListener('click', () => {
        menuLink.classList.toggle('md:hidden');
        search.classList.toggle('hidden');
        searchBox.style.width = "450px";
        searchBox.classList.toggle('hidden');
    })

    search1.addEventListener('click', () => {
        menuLink.classList.toggle('md:hidden');
        search.classList.toggle('hidden');
        searchBox.classList.toggle('hidden');
    })
</script>
