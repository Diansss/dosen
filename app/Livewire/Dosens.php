<?php

namespace App\Livewire;

use App\Models\Dosen;
use Livewire\Component;

class Dosens extends Component
{
    public function render()
    {
        $dosens = Dosen::orderBy('nama','ASC')->get();

        return view('livewire.dosens',[
            'dosens' => $dosens
        ]);
    }
}
