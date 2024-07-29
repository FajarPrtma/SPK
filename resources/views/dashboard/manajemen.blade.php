@extends('dashboard.layout.main')
@section('dashboard')
                <div class="space-x-1 space-y-2 relative border border-gray-300 bg-gray-100 p-5 rounded-lg shadow-lg mb-4">
                    <h3 class="text-xl font-bold mb-2">Manajemen Pengguna</h3>
                    <button class="relative w-48 h-48 bg-white p-5 cursor-pointer rounded-lg shadow-lg hover:bg-gray-50">
                        <a href="{{ route('dashboard.mana.kelus') }}">
                        <img src="{{ asset('image/logokuis.jpg') }}" alt="Kuisioner Image" class="w-full h-full object-cover rounded-lg">
                        <p class="absolute bottom-0 left-1/2 transform -translate-x-1/2 bg-white bg-opacity-75 text-center w-full text-sm rounded-b-lg">Kelola User</p>
                        </a>
                    </button>
                </div>
@endsection
