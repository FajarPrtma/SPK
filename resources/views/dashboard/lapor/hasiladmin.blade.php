@extends('dashboard.layout.main')

@section('dashboard')
    <h2 class="text-2xl font-bold mb-4">Laporan &gt; Hasil Siswa</h2>
    <div class="relative border border-gray-300 p-6 rounded-lg bg-gray-100 shadow-lg">
        <table class="min-w-full divide-y divide-gray-200" id="dataTable">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Siswa</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelas</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Program Studi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Nilai</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($results as $userResults)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900" rowspan="{{ count($userResults) }}">{{ $userResults->first()->user->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500" rowspan="{{ count($userResults) }}">{{ $userResults->first()->user->kelas->name }}</td>
                        @foreach($userResults as $result)
                            @if (!$loop->first)
                                <tr>
                            @endif
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $result->quisioner->jurusan }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ round($result->total, 2) }}</td>
                            </tr>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded print-all-button">
                <i class="fas fa-print"></i> Print Semua
            </button>
        </div>
    </div>

    <!-- Script to handle print functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const printAllButton = document.querySelector('.print-all-button');
            printAllButton.addEventListener('click', function () {
                const dataTable = document.querySelector('#dataTable').outerHTML;

                const printWindow = window.open('', '', 'height=600,width=800');
                printWindow.document.write('<html><head><title>Cetak Semua</title>');
                printWindow.document.write('<style>body{font-family: Arial, sans-serif; padding: 20px;} table{width: 100%; border-collapse: collapse;} th, td{border: 1px solid #000; padding: 8px; text-align: left;} th{background-color: #f2f2f2;} .no-print{display:none;}</style>');
                printWindow.document.write('</head><body>');
                printWindow.document.write(dataTable);
                printWindow.document.write('</body></html>');
                printWindow.document.close();
                printWindow.print();
            });
        });
    </script>
@endsection
