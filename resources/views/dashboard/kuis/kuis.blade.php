@extends('dashboard.layout.main')

@section('dashboard')
    <h2 class="text-2xl font-bold mb-4">Kuisioner Siswa</h2>
    <form action="{{ route('dashboard.kuis.kuis.store') }}" method="POST" id="kuisForm" onsubmit="return calculateTotal()">
        @csrf
        <div class="relative border border-gray-300 p-6 rounded-lg bg-white shadow-lg">
            @foreach($quisioners as $quisioner)
                <input type="hidden" name="quisioner_id[]" value="{{ $quisioner->id }}">
                <div class="relative border border-gray-300 p-6 rounded-lg bg-white shadow-lg mb-4">
                    <div class="mb-2">
                        <label class="block font-bold mb-2">{{ $quisioner->jurusan }}</label>
                        <label class="block font-bold mb-2">{{ $quisioner->cita }}</label>
                        <div class="flex items-center space-x-2">
                            <label>
                                <input type="radio" name="cita_cita[{{ $quisioner->id }}]" value="1" class="mr-1" data-kriteria="0.3"> 1
                            </label>
                            <label>
                                <input type="radio" name="cita_cita[{{ $quisioner->id }}]" value="2" class="mr-1" data-kriteria="0.3"> 2
                            </label>
                            <label>
                                <input type="radio" name="cita_cita[{{ $quisioner->id }}]" value="3" class="mr-1" data-kriteria="0.3"> 3
                            </label>
                            <label>
                                <input type="radio" name="cita_cita[{{ $quisioner->id }}]" value="4" class="mr-1" data-kriteria="0.3"> 4
                            </label>
                        </div>
                        <div class="mb-2">
                            <label class="block font-bold mb-2">{{ $quisioner->pendidikan }}</label>
                            <div class="flex items-center space-x-2">
                                <label>
                                    <input type="radio" name="pendidikan[{{ $quisioner->id }}]" value="1" class="mr-1" data-kriteria="0.15"> 1
                                </label>
                                <label>
                                    <input type="radio" name="pendidikan[{{ $quisioner->id }}]" value="2" class="mr-1" data-kriteria="0.15"> 2
                                </label>
                                <label>
                                    <input type="radio" name="pendidikan[{{ $quisioner->id }}]" value="3" class="mr-1" data-kriteria="0.15"> 3
                                </label>
                                <label>
                                    <input type="radio" name="pendidikan[{{ $quisioner->id }}]" value="4" class="mr-1" data-kriteria="0.15"> 4
                                </label>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="block font-bold mb-2">{{ $quisioner->hobi }}</label>
                            <div class="flex items-center space-x-2">
                                <label>
                                    <input type="radio" name="hobi[{{ $quisioner->id }}]" value="1" class="mr-1" data-kriteria="0.2"> 1
                                </label>
                                <label>
                                    <input type="radio" name="hobi[{{ $quisioner->id }}]" value="2" class="mr-1" data-kriteria="0.2"> 2
                                </label>
                                <label>
                                    <input type="radio" name="hobi[{{ $quisioner->id }}]" value="3" class="mr-1" data-kriteria="0.2"> 3
                                </label>
                                <label>
                                    <input type="radio" name="hobi[{{ $quisioner->id }}]" value="4" class="mr-1" data-kriteria="0.2"> 4
                                </label>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="block font-bold mb-2">{{ $quisioner->keahlian }}</label>
                            <div class="flex items-center space-x-2">
                                <label>
                                    <input type="radio" name="keahlian[{{ $quisioner->id }}]" value="1" class="mr-1" data-kriteria="0.2"> 1
                                </label>
                                <label>
                                    <input type="radio" name="keahlian[{{ $quisioner->id }}]" value="2" class="mr-1" data-kriteria="0.2"> 2
                                </label>
                                <label>
                                    <input type="radio" name="keahlian[{{ $quisioner->id }}]" value="3" class="mr-1" data-kriteria="0.2"> 3
                                </label>
                                <label>
                                    <input type="radio" name="keahlian[{{ $quisioner->id }}]" value="4" class="mr-1" data-kriteria="0.2"> 4
                                </label>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="block font-bold mb-2">{{ $quisioner->lingkungan }}</label>
                            <div class="flex items-center space-x-2">
                                <label>
                                    <input type="radio" name="lingkungan[{{ $quisioner->id }}]" value="1" class="mr-1" data-kriteria="0.15"> 1
                                </label>
                                <label>
                                    <input type="radio" name="lingkungan[{{ $quisioner->id }}]" value="2" class="mr-1" data-kriteria="0.15"> 2
                                </label>
                                <label>
                                    <input type="radio" name="lingkungan[{{ $quisioner->id }}]" value="3" class="mr-1" data-kriteria="0.15"> 3
                                </label>
                                <label>
                                    <input type="radio" name="lingkungan[{{ $quisioner->id }}]" value="4" class="mr-1" data-kriteria="0.15"> 4
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="text-right space-x-2 mt-4">
                <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                    Selesai
                </button>
            </div>
        </div>
    </form>

    <script>
        function calculateTotal() {
            const form = document.getElementById('kuisForm');
            const totals = {};

            form.querySelectorAll('input[type="hidden"][name="quisioner_id[]"]').forEach(input => {
                totals[input.value] = {
                    cita_cita: 0,
                    pendidikan: 0,
                    hobi: 0,
                    keahlian: 0,
                    lingkungan: 0,
                    total: 0
                };
            });

            form.querySelectorAll('input[type="radio"]:checked').forEach(input => {
                const value = parseFloat(input.value);
                const kriteria = parseFloat(input.getAttribute('data-kriteria'));
                const quisionerId = input.name.match(/\d+/)[0];
                const category = input.name.split('[')[0];
                totals[quisionerId][category] += value * kriteria;
                totals[quisionerId].total += value * kriteria;
            });

            for (const [quisionerId, total] of Object.entries(totals)) {
                const totalInput = document.createElement('input');
                totalInput.type = 'hidden';
                totalInput.name = `totals[${quisionerId}]`;
                totalInput.value = total.total;
                form.appendChild(totalInput);

                for (const [key, value] of Object.entries(total)) {
                    if (key !== 'total') {
                        const detailInput = document.createElement('input');
                        detailInput.type = 'hidden';
                        detailInput.name = `${key}[${quisionerId}]`;
                        detailInput.value = value;
                        form.appendChild(detailInput);
                    }
                }
            }

            return true;
        }
    </script>
@endsection
