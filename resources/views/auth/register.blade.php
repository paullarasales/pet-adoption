<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,800&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif; /* Apply Poppins font to the body */
        }

        /* Add this if needed */
        html, body {
            height: 100%;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-poppins text-gray-900 antialiased">
    <div class="flex items-center justify-center w-full h-screen bg-gray-100">
        <div class="w-9/12 h-5/6 shadow-md overflow-hidden sm:rounded-lg flex">
            <!-- Left side content -->
            <div class="w-1/2 bg-white h-full flex flex-col items-center justify-between">
                <!-- Top -->
                <div class="flex flex-col justify-start w-ful p-4">
                    <h1 class="text-6xl text-gray-400">Changing Lives, One Adoption at a Time.</h1>
                </div>
                <div class="flex items-center justify-center">
                    <img src={{ asset('images/no-bg-dog.png') }}>
                </div>
            </div>

            <!-- Right side content (signup form) -->
            <div class="flex items-center justify-center w-1/2 gap-10">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-col items-start justify-start w-96">
                        <h1 class="text-4xl font-semibold">
                            Sign up
                        </h1>
                    </div>

                    <div class="flex flex-col w-96 mt-4">
                         <!-- First Name -->
                        <label for="firstname" class="text-md font-medium">First Name</label>
                        <input type="text" id="firstname" name="firstname" class="outline-border border-white shadow" placeholder="Enter your first name" required>
                    </div>
                    <div class="flex flex-col w-96 mt-4">
                        <!-- Last Name -->
                        <label for="lastname" class="text-md font-medium">Last Name</label>
                        <input type="text" id="lastname" name="lastname" class="outline-none border-white shadow" placeholder="Enter your last name" required>
                    </div>
                    <div class="flex flex-col w-96 mt-4">
                        <!-- Email Address -->
                        <label for="email" class="text-md font-medium">Email</label>
                        <input type="email" id="email" name="email" class="outline-none border-white shadow" placeholder="Enter your email address" required>
                    </div>

                    <div class="flex flex-col mt-4 w-96">
                        <!-- Password -->
                        <label for="password" class="text-md font-medium">Password</label>
                        <input type="password" id="password" name="password" class="outline-none border-white shadow" placeholder="Enter your password" required>
                    </div>


                    <div class="flex items-center justify-between mt-4">
                        <a href="{{ route('login') }}" class="no-underline text-sm font-medium text-gray-600 hover:text-gray-900">Already registered?<span class="text-blue-500">Login</span></a>
                        <!-- Login Button -->
                        <button type="submit" class="outline-none border-0 bg-blue-700 text-white h-10 w-3/6 rounded">Sign up</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>

