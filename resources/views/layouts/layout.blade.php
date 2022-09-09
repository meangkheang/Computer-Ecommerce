<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computer-Ecommerce</title>
   
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
   
</head>
<body>
   
    @include('layouts.navbar')

    <div class="container-fluid">
        

        <div class="row">
            {{-- filter side   --}}
            <div class="col-4 col-md-3 border-right-1">
                {{-- @include('layouts.sidefilter') --}}
            </div>

            {{-- products side   --}}
            <div class="col-8 col-md-9">

                {{-- popular products --}}
                {{-- @include('products.popular_products')

                @yield('content') --}}

            </div>
        </div>

    </div>
  
</body>
</html>