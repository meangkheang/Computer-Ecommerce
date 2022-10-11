<!DOCTYPE html>
<html lang="en">
@include('links.headerlinks')

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
