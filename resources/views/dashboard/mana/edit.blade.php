@extends('dashboard.layout.main')

@section('dashboard')
<h2 class="text-2xl font-bold mb-4">Manajemen Pengguna &gt; Kelola User &gt; Edit</h2>
    <div class="relative border border-gray-300 bg-gray-100 p-6 rounded-l shadow-lg">
        <form action="{{ route('dashboard.mana.edit.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nama</label>
                <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $user->name }}" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $user->email }}" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $user->password }}" required>
            </div>
            <div class="mb-4">
                <label for="kelas" class="block text-gray-700 font-bold mb-2">Role</label>
                <select class="border rounded mb-4 w-full py-2 px-3" aria-label="kelas" id="kelas" name="kelas_id">
                    <option selected disabled>- Pilih Kelas  -</option>
                    @foreach ($kelass as $kelas)
                    <option value="{{ $kelas->id }}" {{ $user->kelas_id == $kelas->id ? 'selected' : '' }}>{{ $kelas->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="role" class="block text-gray-700 font-bold mb-2">Role</label>
                <select class="border rounded mb-4 w-full py-2 px-3" aria-label="role" id="role" name="role_id">
                    <option selected disabled>- Pilih Peran -</option>
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                    @endforeach
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
