@extends('dashboard.layout.main')

@section('dashboard')
    <h2 class="text-2xl font-bold mb-4">Hasil Kuisioner</h2>

    <!-- Bagian untuk program studi yang paling relevan -->
    <div class="relative border border-gray-300 p-6 rounded-lg bg-white shadow-lg mb-4">
        <h3 class="text-xl font-semibold mb-2">Program studi yang paling relevan dengan anda adalah:</h3>
        <ol class="list-decimal ml-6">
            @foreach($topResults as $topResult)
                <li>{{ $topResult->quisioner->jurusan }} - Total Nilai: {{ round($topResult->total, 2) }}</li>
            @endforeach
        </ol>
    </div>

    <!-- Bagian untuk semua hasil -->
    <div class="relative border border-gray-300 p-6 rounded-lg bg-white shadow-lg">
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b-2 border-gray-300 text-left">No</th>
                    <th class="py-2 px-4 border-b-2 border-gray-300 text-left">Program Studi</th>
                    <th class="py-2 px-4 border-b-2 border-gray-300 text-left">Total Nilai</th>
                    <th class="py-2 px-4 border-b-2 border-gray-300 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $result)
                <tr>
                    <td class="py-2 px-4 border-b border-gray-300">{{ $loop->iteration }}</td>
                    <td class="py-2 px-4 border-b border-gray-300">{{ $result->quisioner->jurusan }}</td>
                    <td class="py-2 px-4 border-b border-gray-300">{{ round($result->total, 2) }}</td>
                    <td class="py-2 px-4 border-b border-gray-300">
                        <a href="{{ route('dashboard.kuis.results.show', $result->id) }}" class="text-blue-500 hover:underline">Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
