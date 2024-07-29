@extends('dashboard.layout.main')

@section('dashboard')
    <h2 class="text-2xl font-bold mb-4">Laporan &gt; Hasil Siswa</h2>
    <div class="relative border border-gray-300 p-6 rounded-lg bg-gray-100 shadow-lg">

            <p class="text-lg font-semibold mb-4">Nama Siswa : <span id="studentName">{{ Auth::user()->name }}</span></p>
            <p class="text-lg font-semibold mb-4">Kelas : <span id="studentKelas">{{ Auth::user()->kelas->name }}</span></p>
            <!-- Tabel 3 Program Studi Paling Relevan -->
            <h3 class="text-lg font-semibold mb-4">3 Program Studi Paling Relevan</h3>
            <table class="min-w-full divide-y divide-gray-200 table-auto" id="topResultsTable">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Program Studi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cita-cita</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pendidikan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hobi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keahlian</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Lingkungan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Nilai</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($topResults as $index => $result)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $result->quisioner->jurusan }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ round($result->cita_cita, 5) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ round($result->pendidikan, 5) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ round($result->hobi, 5) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ round($result->keahlian, 5) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ round($result->lingkungan, 5) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ round($result->total, 5) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Tabel Semua Program Studi -->
            <h3 class="text-lg font-semibold mt-8 mb-4">Semua Program Studi</h3>
            <table class="min-w-full divide-y divide-gray-200 table-auto" id="dataTable">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Program Studi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cita-cita</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pendidikan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hobi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keahlian</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Lingkungan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Nilai</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($results as $index => $result)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $result->quisioner->jurusan }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ round($result->cita_cita, 5) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ round($result->pendidikan, 5) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ round($result->hobi, 5) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ round($result->keahlian, 5) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ round($result->lingkungan, 5) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ round($result->total, 5) }}</td>
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
            const studentNameElement = document.getElementById('studentName');
            const studentKelasElement = document.getElementById('studentKelas');
            const studentName = studentNameElement ? studentNameElement.innerText : '';
            const studentKelas = studentKelasElement ? studentKelasElement.innerText : '';

            const printAllButton = document.querySelector('.print-all-button');
            printAllButton.addEventListener('click', function () {
                let topResultsTable = '';
                let dataTable = '';

                if (studentNameElement) {
                    topResultsTable = document.querySelector('#topResultsTable').outerHTML;
                    dataTable = document.querySelector('#dataTable').outerHTML;
                } else {
                    dataTable = document.querySelector('#dataTable').outerHTML;
                }

                const printWindow = window.open('', '', 'height=600,width=800');
                printWindow.document.write('<html><head><title>Cetak Semua</title>');
                printWindow.document.write('<style>body{font-family: Arial, sans-serif; padding: 20px;} table{width: 100%; border-collapse: collapse;} th, td{border: 1px solid #000; padding: 8px; text-align: left;} th{background-color: #f2f2f2;} .no-print{display:none;}</style>');
                printWindow.document.write('</head><body>');

                if (studentNameElement) {
                    printWindow.document.write('<h3>Nama Siswa: ' + studentName + '</h3>');
                    printWindow.document.write('<h3>Kelas: ' + studentKelas + '</h3>');
                    printWindow.document.write('<h3>3 Program Studi Paling Relevan</h3>');
                    printWindow.document.write(topResultsTable);
                    printWindow.document.write('<h3>Semua Program Studi</h3>');
                } else {
                    printWindow.document.write(dataTable);
                }

                printWindow.document.write(dataTable);
                printWindow.document.write('</body></html>');
                printWindow.document.close();
                printWindow.print();
            });
        });
    </script>
@endsection
