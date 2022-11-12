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
        </a>

        @if(session()->has('user'))
            <a href="/auth/logout" class="px-4 py-2 rounded bg-red-500 text-white">Log out</a>
        @endif

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
