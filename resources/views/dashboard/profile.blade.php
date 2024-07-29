@extends('dashboard.layout.main')
@section('dashboard')
@if(Auth::user()->role->name == 'admin')
<h2 class="text-2xl font-bold mb-4">Program Studi &gt; Kelola Program Studi &gt; Tambah</h2>
<div class="relative border border-gray-300 bg-gray-100 p-3 rounded-lg shadow-lg">
    <div class="relative border border-gray-300 p-3 rounded-lg bg-white shadow-lg mb-2">
        <div class="d-flex align-items-center justify-content-between border-bottom">
            <p class="block font-bold mb-2">Name</p>
            <p class="py-2 text-muted profile">{{ Auth::user()->name }}</p>
        </div>
    </div>
    <div class="relative border border-gray-300 p-3 rounded-lg bg-white shadow-lg mb-4">
        <div class="d-flex align-items-center justify-content-between border-bottom">
            <p class="block font-bold mb-2">Email</p>
            <p class="py-2 text-muted profile">{{ Auth::user()->email }}</p>
        </div>
    </div>
        <div class="text-right space-x-2 mt-4">
            <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                <a href="{{ route('dashboard.profile.edit') }}">Edit Profile</a>
            </button>
            <button type="button" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                <a href="{{ route('dashboard.profile.changepass') }}">Change Password</a>
            </button>
        </div>
    </div>
@else(Auth::user()->role->name == 'siswa')
<h2 class="text-2xl font-bold mb-4">Program Studi &gt; Kelola Program Studi &gt; Tambah</h2>
<div class="relative border border-gray-300 bg-gray-100 p-3 rounded-lg shadow-lg">
    <div class="relative border border-gray-300 p-3 rounded-lg bg-white shadow-lg mb-2">
        <div class="d-flex align-items-center justify-content-between border-bottom">
            <p class="block font-bold mb-1">Name</p>
            <p class="py-1 text-muted profile">{{ Auth::user()->name }}</p>
        </div>
    </div>
    <div class="relative border border-gray-300 p-3 rounded-lg bg-white shadow-lg mb-4">
        <div class="d-flex align-items-center justify-content-between border-bottom">
            <p class="block font-bold mb-1">Email</p>
            <p class="py-1 text-muted profile">{{ Auth::user()->email }}</p>
        </div>
    </div>
    <div class="relative border border-gray-300 p-3 rounded-lg bg-white shadow-lg mb-4">
        <div class="d-flex align-items-center justify-content-between border-bottom">
            <p class="block font-bold mb-1">Kelas</p>
            <p class="py-1 text-muted profile">{{ Auth::user()->kelas->name }}</p>
        </div>
    </div>
        <div class="text-right space-x-2 mt-4">
            <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                <a href="{{ route('dashboard.profile.edit') }}">Edit Profile</a>
            </button>
            <button type="button" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                <a href="{{ route('dashboard.profile.changepass') }}">Change Password</a>
            </button>
        </div>
    </div>
@endif
    {{--  {{--  @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('dashboard.profile.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-sm font-bold mb-2">Name:</label>
            <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-bold mb-2">Email:</label>
            <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
            <div class="mb-3">
                <label for="current_password" class="block text-sm font-bold mb-2">Current Password</label>
                <input type="password" name="current_password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control @error('current_password') is-invalid @enderror" required>
                @error('current_password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="new_password" class="block text-sm font-bold mb-2">New Password</label>
                <input type="password" name="new_password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control" required>
            </div>
            <div class="mb-3">
                <label for="new_password_confirmation" class="block text-sm font-bold mb-2">Confirm New Password</label>
                <input type="password" name="new_password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control" required>
            </div>
        <div class="text-right space-x-2 mt-4">
            <button type="button" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
            <a href="#">Cancel</a>
            </button>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline">
                Update Profile
            </button>
        </div>
    </form>
</div>  --}}
@endsection
