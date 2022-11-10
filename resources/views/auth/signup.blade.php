<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Sign Up</title>
</head>

<body>
    @include('layouts.navbar')
    <!-- component -->
    <div class="bg-grey-lighter mt-16 flex flex-col">
        <form class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2" method="post"
            action="/auth/">
            @csrf
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">

                <h1 class="mb-8 text-3xl text-center">Sign up</h1>

                @error('name')
                    <p class="text-red-500 font-light text-sm"> {{ $message }} </p>
                @enderror
                <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="name"
                    placeholder="Full Name" />

                @error('phone_number')
                    <p class="text-red-500 font-light text-sm"> {{ $message }} </p>
                @enderror
                <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="phone_number"
                    placeholder="Phone Number" />

                @error('email')
                    <p class="text-red-500 font-light text-sm"> {{ $message }} </p>
                @enderror
                <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="email"
                    placeholder="Email" />

                @error('password')
                    <p class="text-red-500 font-light text-sm"> {{ $message }} </p>
                @enderror
                <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
                    placeholder="Password" />

                @error('confirm_password')
                    <p class="text-red-500 font-light text-sm"> {{ $message }} </p>
                @enderror
                <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="confirm_password" placeholder="Confirm Password" />

                <button type="submit"
                    class="w-full text-center py-3 rounded bg-green text-black hover:bg-green-dark focus:outline-none my-1 bg-green-400">Create
                    Account</button>

                <div class="text-center text-sm text-grey-dark mt-4">
                    By signing up, you agree to the
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Terms of Service
                    </a> and
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Privacy Policy
                    </a>
                </div>
            </div>

            <div class="text-grey-dark mt-6">
                Already have an account?
                <a class="no-underline border-b border-blue text-blue" href="/auth/signin">
                    Log in
                </a>.
            </div>
        </form>
    </div>


</body>

</html>
