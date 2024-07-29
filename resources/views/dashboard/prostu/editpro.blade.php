@extends('dashboard.layout.main')
@section('dashboard')
<h2 class="text-2xl font-bold mb-4">Program Studi &gt; Kelola Program Studi &gt; Tambah</h2>
<div class="relative border border-gray-300 bg-gray-100 p-6 rounded-lg shadow-lg">
    <form action="{{ route('dashboard.prostu.editpro.update', $prostu->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div id="formSection">
            <div class="mb-2">
                <label class="block font-bold mb-2" for="prostu1">Input Program Studi</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="prostu1" name="prodi" type="text" value="{{ $prostu->prodi}}" required>
            </div>
            <div class="mb-2">
                <label class="block font-bold mb-2" for="gambar1">Upload Gambar</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="gambar1" name="gambar" type="file">
                @if($prostu->gambar)
                    <img src="{{ asset('image/'.$prostu->gambar) }}" alt="Current Image" class="mt-2" style="max-width: 200px;">
                @endif
            </div>
            <div class="mb-2">
                <label class="block font-bold mb-2" for="pernyataan1">Deskripsi</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="deskripsi1" name="deskripsi" type="text" value="{{ $prostu->deskripsi}}" required>
            </div>
        </div>
        <div class="text-right space-x-2 mt-4">
            <button type="button" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                <a href="{{ route('dashboard.prostu.listpro') }}">Batal</a>
            </button>
            <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                Selesai
            </button>
        </div>
    </form>
</div>
@endsection
