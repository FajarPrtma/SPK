@extends('dashboard.layout.main')
@section('dashboard')
<div class="container mx-auto">
    <h2 class="text-2xl font-bold mb-4">Edit Profile</h2>
    <form action="{{ route('dashboard.profile.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-sm font-bold mb-2">Name :</label>
            <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-bold mb-2">Email :</label>
            <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="text-right space-x-2 mt-4">
            <button type="button" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
            <a href="{{route('dashboard.profile')}}">Cancel</a>
            </button>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline">
                Update Profile
            </button>
        </div>
    </form>
</div>
@endsection
