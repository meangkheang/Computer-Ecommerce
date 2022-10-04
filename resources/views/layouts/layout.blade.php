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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body >

<div class="w-full">
    @include('layouts.navbar')
    @include('layouts.productnavbar')
    @yield('content')
    @include('layouts.footer')

</div>
   


</body>
<script>
    const sliders = document.querySelector("#slider");
    let isDown = false;
    let startX;
    let scrollLeft;

    sliders.addEventListener("mousedown", (e) => {
        isDown = true;
        sliders.classList.add("active");
        startX = e.pageX - sliders.offsetLeft;
        scrollLeft = sliders.scrollLeft;
    });
    sliders.addEventListener("mouseleave", (e) => {
        isDown = false;
        sliders.classList.remove("active");
    });
    sliders.addEventListener("mouseup", (e) => {
        isDown = false;
        sliders.classList.remove("active");
    });
    sliders.addEventListener("mousemove", (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - sliders.offsetLeft;
        const walk = (x - startX) * 1; //scroll-fast
        sliders.scrollLeft = scrollLeft - walk;

    });
</script>

</html>
