<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Index</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="flex w-full h-full">
        <div class="w-3/4 h-full bg-cover bg-center" style="background-image: url('{{ asset('image/sopo.jpeg') }}');"></div>
        <div class="w-1/2 h-full flex items-center justify-center">
            <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6 relative">
                <a href="{{ url('/') }}" class="absolute top-4 left-4 text-gray-500 hover:text-gray-700">
                    <i class="mt-2 fas fa-arrow-left fa-2x"></i>
                </a>
                <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
                <form action="{{ route('login.authenticate') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="inputEmail" type="email" name="email" type="text" placeholder="Email" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="inputPassword" name="password" type="password" placeholder="********" required>
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-800 text-sm" type="submit">
                            Login
                        </button>
                    </div>
                </form>
                <div class="mt-4">
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                        Forgot Password?
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
