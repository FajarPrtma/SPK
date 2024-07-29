@extends('dashboard.layout.main')
@section('dashboard')
    <h2 class="text-2xl font-bold mb-4">Program Studi &gt; {{ $prostu->prodi }}</h2>
    <div class="relative border border-gray-300 bg-gray-100 p-5 rounded-lg shadow-lg mb-4">
        <h2 class="text-2xl text-center font-bold mb-4">{{ $prostu->prodi }}</h2>
        <div class="mb-4 flex justify-center">
            <img src="{{ asset('image/' . $prostu->gambar) }}" alt="{{ $prostu->prodi }}" class="w-80 h-50 h-auto rounded-lg">
        </div>
        <p class="text-lg">{{ $prostu->deskripsi }}</p>
    </div>
@endsection
