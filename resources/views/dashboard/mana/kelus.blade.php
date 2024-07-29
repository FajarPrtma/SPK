@extends('dashboard.layout.main')

@section('dashboard')
    <h2 class="text-2xl font-bold mb-4">Manajemen Pengguna &gt; Kelola User</h2>
    <div class="relative border border-gray-300 bg-gray-100 p-6 rounded-l shadow-lg">
        <!-- Tabel Pengguna -->
        <table class="w-full border-collapse bg-white shadow-lg rounded-lg">
            <thead>
                <tr>
                    <th class="border-b-2 border-gray-300 py-2 px-4 text-left">No</th>
                    <th class="border-b-2 border-gray-300 py-2 px-4 text-left">Nama</th>
                    <th class="border-b-2 border-gray-300 py-2 px-4 text-left">Email</th>
                    <th class="border-b-2 border-gray-300 py-2 px-4 text-left">Password</th>
                    <th class="border-b-2 border-gray-300 py-2 px-4 text-left">Kelas</th>
                    <th class="border-b-2 border-gray-300 py-2 px-4 text-left">Peran</th>
                    <th class="border-b-2 border-gray-300 py-2 px-4 text-left">Tanggal Pembuatan</th>
                    <th class="border-b-2 border-gray-300 py-2 px-4 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td class="border-b border-gray-300 py-2 px-4">{{ $loop->iteration }}</td>
                    <td class="border-b border-gray-300 py-2 px-4">{{ $user->name }}</td>
                    <td class="border-b border-gray-300 py-2 px-4">{{ $user->email }}</td>
                    <td class="border-b border-gray-300 py-2 px-4">**</td>
                    <td class="border-b border-gray-300 py-2 px-4">{{ optional($user->kelas)->name }}</td>
                    <td class="border-b border-gray-300 py-2 px-4">{{ optional($user->role)->name }}</td>
                    <td class="border-b border-gray-300 py-2 px-4">{{ $user->created_at }}</td>
                    <td class="border-b border-gray-300 py-2 px-4">
                        <form onsubmit="return confirm('Apakah anda yakin ingin menghapus user?');" action="{{ route('dashboard.mana.kelus.destroy', $user->id) }}" method="POST" class="d-inline">
                            <button class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                                <a href="{{ route('dashboard.mana.edit', $user->id) }}">Edit</a>
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
                <a href="{{ route('dashboard.manajemen') }}">Selesai</a>
            </button>
            <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                <a href="{{ route('dashboard.mana.index') }}">Tambah</a>
            </button>
        </div>
    </div>

    {{--  <!-- Modal Form -->
    <div id="modal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
            <h2 class="text-xl font-bold mb-4">Tambah Pengguna</h2>
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
                <select id="role_id" name="role_id" class="border rounded mb-4 w-full py-2 px-3" required>
                    <option value="1">Admin</option>
                    <option value="2">Siswa</option>
                    <option value="3">Guru</option>
                </select>
                <div class="flex justify-end space-x-2">
                    <button type="button" id="closeModal" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('openModal').addEventListener('click', function() {
            document.getElementById('modal').classList.remove('hidden');
        });

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('modal').classList.add('hidden');
        });
    </script>  --}}
@endsection
