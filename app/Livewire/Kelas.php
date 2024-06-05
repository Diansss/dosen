<?php
namespace App\Livewire;

use App\Filament\Resources\MahasiswaResource;
use Livewire\Component;

class Kelas extends Component
{
    public $searchNama = '';
    public $filterJurusan = '';
    public $sortBy = 'nim';
    public $sortDirection = 'asc';

    public function render()
    {
        $mahasiswas = MahasiswaResource::getTableQuery()
            ->when($this->searchNama, function ($query) {
                $query->where('nama', 'like', '%'. $this->searchNama. '%');
            })
            ->when($this->filterJurusan, function ($query) {
                $query->where('jurusan', $this->filterJurusan);
            })
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate(10);

        return view('livewire.kelas', [
            'mahasiswas' => $mahasiswas,
        ]);
    }

    public function updatedSearchNama()
    {
        $this->resetPage();
    }

    public function updatedFilterJurusan()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortBy === $field) {
            $this->sortDirection = $this->sortDirection === 'asc'? 'desc' : 'asc';
        } else {
            $this->sortBy = $field;
            $this->sortDirection = 'asc';
        }
    }
}
