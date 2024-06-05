<div >
    <div class="relative flex flex-col items-center justify-center">
    <h1 class="text-3xl font-bold mt-10 text-gray-800 items-center justify-center">Absen Form</h1>
    </div>
    <div style="border: 1px solid rgba(128, 128, 128, 0.5);" class="border border-gray-400 rounded-md">
        <div>
            <form wire:submit.prevent="submit">
                <div>
                    <label for="id_matkul">Matakuliah:</label>
                    <select wire:model="id_matkul" id="id_matkul">
                        @foreach($jadwals as $jadwal)
                            <option value="{{ $jadwal->id_matkul }}">{{ $jadwal->id_matkul }}</option>
                        @endforeach
                    </select>
                    @error('id_matkul') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="nim">NIM:</label>
                    <input type="text" wire:model="nim" id="nim">
                    @error('nim') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="name">Name:</label>
                    <input type="text" wire:model="name" id="name">
                    @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="kelas">Kelas:</label>
                    <input type="text" wire:model="kelas" id="kelas">
                    @error('kelas') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="status">Status:</label>
                    <select wire:model="status" id="status">
                        <option value="Hadir">Hadir</option>
                        <option value="Izin">Izin</option>
                        <option value="Sakit">Sakit</option>
                        <option value="Tidak Hadir">Tidak Hadir</option>
                    </select>
                    @error('status') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                @if($status == 'Sakit' || $status == 'Izin')
                    <div>
                        <label for="bukti">Bukti:</label>
                        <input type="text" wire:model="bukti" id="bukti">
                        @error('bukti') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="bukti_surat">Bukti Surat:</label>
                        <input type="file" wire:model="bukti_surat" id="bukti_surat">
                        @error('bukti_surat') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                @endif

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
