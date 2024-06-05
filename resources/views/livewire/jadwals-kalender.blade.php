<div>
    <style>
        .table-border {
          border: 1px solid #ddd;
          border-collapse: collapse;
        }
        .table-border th, .table-border td {
          border: 1px solid #ddd;
          padding: 8px;
        }
        .table-border th {
          background-color: #f2f2f2;
        }
    </style>
    <div class="relative flex flex-col items-center justify-center">
    <h1 class="text-3xl font-bold mt-10 text-gray-800 items-center justify-center">Jadwal Kuliah</h1>
    </div>
    <div>
        {{ $jadwals->links() }}
        <table class="w-full text-sm text-left text-gray-500 table-border">
            <thead>
                <tr>
                    <th class="px-6 py-3" wire:click="sortBy('id_matkul')">ID Matkul {{ $sortBy === 'id_matkul'? ($sortDirection === 'asc'? '' : '') : '' }}</th>
                    <th class="px-6 py-3" >Matkul</th>
                    <th class="px-6 py-3" wire:click="sortBy('kelas')">Kelas    {{ $sortBy === 'kelas'? ($sortDirection === 'asc'? '' : '') : '' }}</th>
                    <th class="px-6 py-3">waktu</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jadwals as $jadwal)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="px-6 py-4">{{ $jadwal->id_matkul }}</td>
                        <td class="px-6 py-4">{{ $jadwal->matkul }}</td>
                        <td class="px-6 py-4">{{ $jadwal->jurusan }}-{{ $jadwal->semester }}{{ $jadwal->kelas }}</td>
                        <td class="px-6 py-4">{{ $jadwal->tanggal }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
