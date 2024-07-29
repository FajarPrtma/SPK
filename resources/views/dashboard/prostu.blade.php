@extends('dashboard.layout.main')
@section('dashboard')
@if (Auth::user()->role->name == 'admin')
                <div class="space-x-1 space-y-2 relative border border-gray-300 bg-gray-100 p-5 rounded-lg shadow-lg mb-4">
                    <h3 class="text-xl font-bold mb-2">Program Studi</h3>
                    <button class="relative w-48 h-48 bg-white p-5 cursor-pointer rounded-lg shadow-lg hover:bg-gray-50">
                        <a href="{{ route('dashboard.prostu.listpro') }}">
                        <img src="{{ asset('image/logokuis.jpg') }}" alt="Kuisioner Image" class="w-full h-full object-cover rounded-lg">
                        <p class="absolute bottom-0 left-1/2 transform -translate-x-1/2 bg-white bg-opacity-75 text-center w-full text-sm rounded-b-lg">Kelola Program Studi</p>
                        </a>
                    </button>
                </div>
                @else (Auth::user()->role->name == 'siswa')
                {{--  @foreach($prostus as $prostu)
                    <div class="space-x-1 space-y-2 relative border border-gray-300 bg-gray-100 p-0 rounded-lg shadow-lg mb-4">
                        <h3 class="text-xl font-bold mb-2 p-5 border-b border-gray-300">Program Studi</h3>
                        <div class="relative w-full h-48 bg-white cursor-pointer rounded-lg shadow-lg hover:bg-gray-50">
                            <a href="{{ route('dashboard.prostu.listpro') }}" class="block w-full h-full">
                                <img src="{{ asset('image/' . $prostu->gambar) }}" alt="Kuisioner Image" class="w-full h-full object-cover rounded-t-lg">
                                <p class="absolute bottom-0 left-0 w-full bg-white bg-opacity-75 text-center text-sm rounded-b-lg p-2">{{ $prostu->prodi }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach  --}}
                <h2 class="text-2xl font-bold mb-4">Program Studi</h2>
                <div class="flex flex-wrap">
                    @foreach($prostus as $prostu)
                        <div class="border border-gray-300 bg-gray-100 p-5 rounded-lg shadow-lg mb-4 mx-2">
                            <button class="relative w-48 h-48 bg-white p-6 cursor-pointer rounded-lg shadow-lg hover:bg-gray-50">
                                <a href="{{ route('dashboard.prostu.eksplor', $prostu->id) }}" class="block w-full h-full">
                                    <img src="{{ asset('image/' . $prostu->gambar) }}" alt="Kuisioner Image" class="w-full h-full object-cover rounded-lg">
                                    <p class="absolute bottom-0 left-1/2 transform -translate-x-1/2 text-center w-full text-sm rounded-b-lg">{{ $prostu->prodi }}</p>
                                </a>
                            </button>
                        </div>
                    @endforeach
                </div>
                @endif
@endsection

