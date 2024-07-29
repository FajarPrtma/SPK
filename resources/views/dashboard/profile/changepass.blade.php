@extends('dashboard.layout.main')
@section('dashboard')
@if(session('hola'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('hola') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<h2 class="text-2xl font-bold mb-4">Manajemen Pengguna &gt; Kelola User &gt; Edit</h2>
    <div class="relative border border-gray-300 bg-gray-100 p-6 rounded-l shadow-lg">
                        <form action="{{ route('dashboard.profile.changepass.update') }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="current_password" class="block text-gray-700 font-bold mb-2">Current Password</label>
                                <input type="password" name="current_password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control @error('current_password') is-invalid @enderror" required>
                                @error('current_password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="new_password" class="block text-gray-700 font-bold mb-2">New Password</label>
                                <input type="password" name="new_password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="new_password_confirmation" class="block text-gray-700 font-bold mb-2">Confirm New Password</label>
                                <input type="password" name="new_password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control" required>
                            </div>
                            <button type="button" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                                <a href="{{route('dashboard.profile')}}">Cancel</a>
                                </button>
                                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline">
                                    Change Password
                                </button>
                        </form>
    </div>
@endsection

