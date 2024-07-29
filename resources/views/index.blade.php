<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Index</title>
    @vite('resources/css/app.css')
</head>
<body class="m-0 p-0">
    <div class="flex h-screen">
        <!-- Background gambar di sebelah kiri -->
        <div class="w-3/4 h-full bg-cover bg-center" style="background-image: url('{{ asset('image/libels.jpeg') }}');"></div>
        <!-- Konten di sebelah kanan -->
        <div class="w-1/2 h-full p-5 flex flex-col justify-center">
            <h1 class="text-3xl font-bold mb-4">Selamat Datang!</h1>
            <p class="mb-4">Kami hadir untuk membantu Anda dalam membuat keputusan yang lebih baik dan tepat.
                Sistem menggunakan metode analisis yang canggih dan data terkini untuk memberikan rekomendasi yang akurat dan dapat diandalkan.</p>
            <button class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 absolute top-5 right-5">
                <a href="{{route('login')}}">Login</a>
            </button>
        </div>
    </div>
</body>
</html>
