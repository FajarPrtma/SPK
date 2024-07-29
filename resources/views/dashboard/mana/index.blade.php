@extends('dashboard.layout.main')

@section('dashboard')
<h2 class="text-2xl font-bold mb-4">Manajemen Pengguna &gt; Kelola User &gt; Tambah</h2>
    <div class="relative border border-gray-300 bg-gray-100 p-6 rounded-l shadow-lg">
        <form action="{{ route('dashboard.mana.kelus.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nama</label>
                <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="kelas_id" class="block text-gray-700 font-bold mb-2">Kelas</label>
                <select id="Kelas_id" name="kelas_id" class="border rounded mb-4 w-full py-2 px-3" required>
                    <option selected disabled>- Pilih Kelas -</option>
                    <option value="1">Kelas 10</option>
                    <option value="2">Kelas 11</option>
                    <option value="3">Kelas 12</option>
                    <option value="4">Bukan Siswa</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="role_id" class="block text-gray-700 font-bold mb-2">Peran</label>
                <select id="role_id" name="role_id" class="border rounded mb-4 w-full py-2 px-3" required>
                    <option selected disabled>- Pilih Peran -</option>
                    <option value="1">Admin</option>
                    <option value="2">Siswa</option>
                    <option value="3">Guru</option>
                </select>
            </div>
            <div class="flex justify-end space-x-2">
                <button type="button" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                    <a href="{{ route('dashboard.mana.kelus') }}">Batal</a>
                </button>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Simpan
                </button>
            </div>
        </form>
    </div>
@endsection
