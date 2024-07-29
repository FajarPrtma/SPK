@extends('dashboard.layout.main')
@section('dashboard')
    <h2 class="text-2xl font-bold mb-4">Program Studi &gt; Kelola Program Studi</h2>
    <div class="relative border border-gray-300 bg-gray-100 p-6 rounded-l shadow-lg">
        <table class="w-full border-collapse bg-white shadow-lg rounded-lg">
            <thead>
                <tr>
                    <th class="border-b-2 border-gray-300 py-2 px-4 text-left">No</th>
                    <th class="border-b-2 border-gray-300 py-2 px-4 text-left">Nama Program Studi</th>
                    <th class="border-b-2 border-gray-300 py-2 px-4 text-left">Tanggal Pembuatan</th>
                    <th class="border-b-2 border-gray-300 py-2 px-4 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prostus as $prostu)
                <tr>
                    <td class="border-b border-gray-300 py-2 px-4">{{ $loop->iteration }}</td>
                    <td class="border-b border-gray-300 py-2 px-4">{{ $prostu->prodi }}</td>
                    <td class="border-b border-gray-300 py-2 px-4">{{ $prostu->created_at }}</td>
                    <td class="border-b border-gray-300 py-2 px-4">
                        <form onsubmit="return confirm('Apakah anda yakin ingin menghapus program studi ini? ');" action="{{ route('dashboard.prostu.listpro.destroy', $prostu->id) }}" method="POST" class="d-inline">
                            <button class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                                <a href="{{ route('dashboard.prostu.editpro', $prostu->id) }}">Edit</a>
                            </button>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-right space-x-2 mt-4">
            <button class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                <a href="{{ route('dashboard.dasbor') }}">Selesai</a>
            </button>
            <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                <a href="{{ route('dashboard.prostu.kelolapro') }}">Tambah</a>
            </button>
        </div>
    </div>
@endsection
