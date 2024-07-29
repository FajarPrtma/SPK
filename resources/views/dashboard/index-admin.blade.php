@extends('dashboard.layout.main')
@section('dashboard')
            @if(Auth::user()->role->name == 'admin')
               <h1 class="text-3xl font-bold mb-4">Halo, Selamat Datang di SISPENKEP!</h1>
                <div class="relative border border-gray-300 bg-gray-100 p-6 rounded-lg shadow-lg mb-4">
                    <p class="mb-4">Selamat datang, {{ Auth::user()->name }}! <br>
                        <br>
                        Selamat datang di dashboard admin yang dirancang khusus untuk memudahkan pengelolaan dan pengembangan sistem pendidikan kita. Peranan Anda sangat penting dalam memastikan operasional yang efisien dan efektif. Teruslah berinovasi dan bekerja keras, karena setiap tindakan Anda membantu menciptakan masa depan yang lebih baik bagi semua. Semangat dalam menjalankan tugas dan tanggung jawab Anda!</p>
                </div>
            @else(Auth::user()->role->name == 'siswa')
                <h1 class="text-3xl font-bold mb-4">Halo, Selamat Datang di SISPENKEP!</h1>
                <div class="relative border border-gray-300 bg-gray-100 p-6 rounded-lg shadow-lg mb-4">
                    <p class="mb-4">Selamat datang, {{ Auth::user()->name }}! <br>
                        <br>
                        Selamat datang di portal siswa, tempat di mana Anda dapat mengeksplorasi dan mengembangkan minat serta bakat Anda. Kami sangat bangga kepada Anda. Manfaatkan semua sumber daya yang tersedia untuk belajar, bertumbuh, dan meraih prestasi. Ingatlah bahwa setiap langkah kecil yang Anda ambil membawa Anda lebih dekat ke impian Anda. Semangat dalam belajar dan teruslah berusaha!</p>
                </div>
            @endif
@endsection

