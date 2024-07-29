@extends('dashboard.layout.main')
@section('dashboard')
@if(Auth::user()->role->name == 'admin')
    <div class="space-x-1 space-y-2 relative border border-gray-300 bg-gray-100 p-5 rounded-lg shadow-lg mb-4">
        <h3 class="text-xl font-bold mb-2">Dasbor</h3>
        <button class="relative w-48 h-48 bg-white p-5 cursor-pointer rounded-lg shadow-lg hover:bg-gray-50">
            <a href="{{ route('dashboard.kuis.listkuis') }}">
            <img src="{{ asset('image/logokuis.jpg') }}" alt="Kuisioner Image" class="w-full h-full object-cover rounded-lg">
            <p class="absolute bottom-0 left-1/2 transform -translate-x-1/2 bg-white bg-opacity-75 text-center w-full text-sm rounded-b-lg">Kelola Kuisioner</p>
            </a>
        </button>
</div>
@else(Auth::user()->role->name == 'siswa')
<div class="space-x-1 space-y-2 relative border border-gray-300 bg-gray-100 p-5 rounded-lg shadow-lg mb-4">
    <h3 class="text-xl font-bold mb-2">Dasbor</h3>
    <button class="relative w-48 h-48 bg-white p-5 cursor-pointer rounded-lg shadow-lg hover:bg-gray-50">
        <a href="{{ route('dashboard.kuis.kuis') }}">
        <img src="{{ asset('image/logokuis.jpg') }}" alt="Kuisioner Image" class="w-full h-full object-cover rounded-lg">
        <p class="absolute bottom-0 left-1/2 transform -translate-x-1/2 bg-white bg-opacity-75 text-center w-full text-sm rounded-b-lg">Kuisioner</p>
        </a>
    </button>
</div>
@endif
@endsection
