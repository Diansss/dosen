<div>
    <style>
       .table-border {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }
       .table-border th,.table-border td {
            border: 1px solid #ddd;
            padding: 8px;
        }
       .table-border th {
            background-color: #f2f2f2;
        }
    </style>
    <div class="relative flex flex-col items-center justify-center">
        <h1 class="text-3xl font-bold mt-10 text-gray-800 items-center justify-center">Daftar Mahasiswa </h1>
        </div>
    <div>
        {{ $mahasiswas->links() }}
        <table class="w-full text-sm text-left text-gray-500 table-border">
            <thead>
                <tr>
                    <th class="px-6 py-3" wire:click="sortBy('nim')">NIM {{ $sortBy === 'nim'? ($sortDirection === 'asc'? '' : '') : '' }}</th>
                    <th class="px-6 py-3" wire:click="sortBy('nama')">Nama {{ $sortBy === 'nama'? ($sortDirection === 'asc'? '' : '') : '' }}</th>
                    <th class="px-6 py-3" wire:click="sortBy('kelas')">Kelas {{ $sortBy === 'kelas'? ($sortDirection === 'asc'? '' : '') : '' }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswas as $mahasiswa)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="px-6 py-4">{{ $mahasiswa->nim }}</td>
                        <td class="px-6 py-4">{{ $mahasiswa->nama }}</td>
                        <td class="px-6 py-4">{{ $mahasiswa->jurusan }}-{{ $mahasiswa->semester }}{{ $mahasiswa->kelas }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
