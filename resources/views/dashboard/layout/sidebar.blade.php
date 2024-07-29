<div class="w-64 p-6 bg-blue-200 shadow-lg">
    <a href="{{ route('dashboard.index-admin') }}">
        <h2 class="text-xl font-bold">SISPENKEP <br> MINAT SISWA/I</h2>
    </a>
    @if(Auth::user()->role->name == 'admin')
    <ul class="mt-6 space-y-2">
        <li class="p-2 border-b border-gray-200 cursor-pointer hover:bg-gray-100">
            <a href="{{ route('dashboard.dasbor') }}">Dasbor</a>
        </li>
        <li class="p-2 border-b border-gray-200 cursor-pointer hover:bg-gray-100">
            <a href="{{ route('dashboard.prostu') }}">Program Studi</a>
        </li>
        <li class="p-2 border-b border-gray-200 cursor-pointer hover:bg-gray-100">
            <a href="{{ route('dashboard.manajemen') }}">Manajemen Pengguna</a>
        </li>
        <li class="p-2 border-b border-gray-200 cursor-pointer hover:bg-gray-100">
            <a href="{{ route('dashboard.laporan') }}">Laporan</a>
        </li>
        <li class="p-2 border-b border-gray-200 cursor-pointer hover:bg-gray-100">
            <a href="{{ route('dashboard.profile') }}">Profile</a>
        </li>
        <li class="p-2 border-b border-gray-200 cursor-pointer hover:bg-gray-100">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="#" onclick="document.getElementById('logout-form').submit()" class="mb-4 text-red-500 hover:underline">Logout</a>
          </li>
    </ul>
    @else(Auth::user()->role->name == 'siswa')
    <ul class="mt-6 space-y-2">
        <li class="p-2 border-b border-gray-200 cursor-pointer hover:bg-gray-100">
            <a href="{{ route('dashboard.dasbor') }}">Dasbor</a>
        </li>
        <li class="p-2 border-b border-gray-200 cursor-pointer hover:bg-gray-100">
            <a href="{{ route('dashboard.prostu') }}">Program Studi</a>
        </li>
        <li class="p-2 border-b border-gray-200 cursor-pointer hover:bg-gray-100">
            <a href="{{ route('dashboard.laporan') }}">Laporan</a>
        </li>
        <li class="p-2 border-b border-gray-200 cursor-pointer hover:bg-gray-100">
            <a href="{{ route('dashboard.profile') }}">Profile</a>
        </li>
        <li class="p-2 border-b border-gray-200 cursor-pointer hover:bg-gray-100">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="#" onclick="document.getElementById('logout-form').submit()" class="mb-4 text-red-500 hover:underline">Logout</a>
          </li>
    </ul>
    @endif
</div>
