<?php
namespace App\Livewire;

// JadwalsKalender.php

use App\Filament\Resources\JadwalResource;
use App\Models\Jadwal;
use Livewire\WithPagination;
// JadwalsKalender.php

use Livewire\Component;

class JadwalsKalender extends Component
{
    public $sortDirection = 'asc';
    public $sortBy = 'kelas';
    public function render()
    {
        $jadwals = JadwalResource::getTableQuery()
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate(10);
        return view('livewire.jadwals-kalender',[
            'jadwals' => $jadwals,
        ]);
    }
}
