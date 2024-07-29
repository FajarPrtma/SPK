@extends('dashboard.layout.main')

@section('dashboard')
    <h2 class="text-2xl font-bold mb-4">Detail Hasil Kuisioner</h2>
    <div class="relative border border-gray-300 p-6 rounded-lg bg-white shadow-lg">
        <div class="mb-4">
            <h3 class="text-xl font-semibold">{{ $result->quisioner->jurusan }}</h3>
        </div>
        <div class="mb-4">
            <p><strong>Cita-cita:</strong> {{ $result->cita_cita }}</p>
            <p><strong>Pendidikan:</strong> {{ $result->pendidikan }}</p>
            <p><strong>Hobi:</strong> {{ $result->hobi }}</p>
            <p><strong>Keahlian:</strong> {{ $result->keahlian }}</p>
            <p><strong>Lingkungan:</strong> {{ $result->lingkungan }}</p>
        </div>
        <div>
            <h4 class="text-lg font-semibold">Total Nilai: {{ $result->total }}</h4>
        </div>
    </div>
@endsection
