<div>
    
    <div class="row position-relative">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @if($dosens->isNotEmpty())
                @foreach($dosens as $dosen)

                    <div class="col-xl-3 col-lg-4 col-md-6 col-4">
                    <x-dosen-component :dosen="$dosen" />
                    </div>

                @endforeach
            @endif
        </div>
    </div>


</div>

