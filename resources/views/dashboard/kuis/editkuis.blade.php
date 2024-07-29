@extends('dashboard.layout.main')
@section('dashboard')
            <h2 class="text-2xl font-bold mb-4">Dashboard &gt; Kelola Kuisioner &gt; Edit</h2>
            <div class="relative border border-gray-300 p-6 rounded-lg bg-gray-100 shadow-lg">
                <form action="{{ route('dashboard.kuis.editkuis.update', $quisioner->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="mb-2">
                            <label class="block font-bold mb-2" for="prostu1">Input Program Studi 1</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="prostu1" name="jurusan" type="text" value="{{ $quisioner->jurusan}}" required>
                        </div>
                        <div class="mb-2">
                            <label class="block font-bold mb-2" for="pernyataan1">Cita-cita</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="pernyataan1" name="cita" type="text" value="{{ $quisioner->cita}}" required>
                        </div>
                        <div class="mb-2">
                            <label class="block font-bold mb-2" for="pendidikan1">Pendidikan</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="pendidikan1" name="pendidikan" type="text" value="{{ $quisioner->pendidikan}}" required>
                        </div>
                        <div class="mb-2">
                            <label class="block font-bold mb-2" for="hobi1">Hobi</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="hobi1" name="hobi" type="text" value="{{ $quisioner->hobi}}" required>
                        </div>
                        <div class="mb-2">
                            <label class="block font-bold mb-2" for="keahlian1">Keahlian</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="keahlian1" name="keahlian" type="text" value="{{ $quisioner->keahlian}}" required>
                        </div>
                        <div class="mb-2">
                            <label class="block font-bold mb-2" for="lingkungan1">Lingkungan</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lingkungan1" name="lingkungan" type="text" value="{{ $quisioner->lingkungan}}" required>
                        </div>
                    </div>
                    <div class="text-right space-x-2 mt-4">
                        <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                            Selesai
                        </button>
                    </div>
                </form>
            </div>
@endsection
