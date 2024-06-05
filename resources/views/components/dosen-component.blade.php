<div class="bg-white shadow-md p-6 my-6 ">
    <div class="card bg-transparent d-flex align-items-center justify-content-center" style="flex-shrink: 0;">
        <img src="{{ asset('storage/'.$dosen->foto) }}" class="img-fluid img-center justify-center" style="width: 300px; height: 300px; border: 1px solid #ccc;">
        <div class="card-body text-center justify-center">
                <h4 class="font-bold text-lg">{{ $dosen->nama }}</h4>
                <p class="mt-2 text-gray-600">Dosen {{ $dosen->matkul }}</p>
        </div>
    </div>
</div>

