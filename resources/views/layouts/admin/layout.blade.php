<!DOCTYPE html>
<html lang="en">
@include('links.headerlinks')

<body >

@include('layouts.admin.navbar')
<div class="w-full">
    @yield('content')
</div>

@livewireScripts
</body>
</html>
