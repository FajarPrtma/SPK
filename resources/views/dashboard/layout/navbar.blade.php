@if(Auth::user()->role->name == 'admin')
<div class="flex justify-between items-center mb-8">
    <a href="{{ route('dashboard.profile') }}" class="absolute top-0 right-0 mt-4 mr-5 text-blue-500 hover:underline">Hi, {{ Auth::user()->name }}</a>
</div>
@elseif(Auth::user()->role->name == 'siswa')
<div class="flex justify-between items-center mb-8">
    <a href="{{ route('dashboard.profile') }}" class="absolute top-0 right-0 mt-4 mr-5 text-blue-500 hover:underline">Hi, {{ Auth::user()->name }}</a>
</div>
@endif
