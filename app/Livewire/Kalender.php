<?php

namespace App\Livewire;

use App\Filament\Resources\JadwalResource;
use Livewire\Component;
use Spatie\Filament\Resources\Resource;

class Calendar extends Component
{
    public function render()
    {
        $resource = JadwalResource::getModel(); // Replace 'Resource' with your actual Filament resource class
        $events = $resource::get();

        return view('livewire.calendar', ['events' => $events]);
    }
}
