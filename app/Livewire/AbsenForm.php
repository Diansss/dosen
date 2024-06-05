<?php

namespace App\Livewire;

use App\Models\Absen;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Livewire\Component;

class AbsenForm extends Component implements Forms\Contracts\HasForms
{
    public $nim
    , $name
    , $id_matkul
    , $status
    , $bukti
    , $bukti_surat
    , $kelas;
    use Forms\Concerns\InteractsWithForms;

    protected function getFormSchema(): array
    {
        $jadwals = \App\Models\Jadwal::all()->pluck('matkul', 'id_matkul');
    @dump($jadwals);

        return [
            Select::make('id_matkul')
            ->label('Matakuliah')
            ->live()
            ->searchable()
            ->options($jadwals)
            ->preload()
            ->dehydrated()
            ->native(false)
            ->required()
            ->columnSpanFull(),
            TextInput::make('nim')
                ->label('NIM')
                ->required()
                ->columnSpanFull(),
            TextInput::make('name')
                ->label('Name')
                ->required()
                ->columnSpanFull(),
            TextInput::make('kelas')
                ->label('Kelas')
                ->required()
                ->columnSpanFull(),
Select::make('status')
    ->live()
    ->required()
    ->options([
        'Hadir' => 'Hadir',
        'Izin' => 'Izin',
        'Sakit' => 'Sakit',
        'Tidak Hadir' => 'Tidak Hadir',
    ])->native(false) // update this line
    ->columnSpanFull()
    ->dehydrated(),
            TextInput::make('bukti')
                ->visible(fn ($get) => $get('status') == 'Sakit' || $get('status') == 'Izin')
                ->requiredWithoutAll('bukti,bukti_surat')
                ->columnSpanFull(),
            FileUpload::make('bukti_surat')
                ->label('Bukti surat')
                ->visible(fn ($get) => $get('status') == 'Sakit' || $get('status') == 'Izin')
                ->requiredWithoutAll('bukti,bukti_surat')
                ->columnSpanFull()
                ->image()
                ->directory('surat')
                ->previewable()
                ->openable(),
        ];
    }

    public function render()
    {
        return view('livewire.absen-form');
    }

    public function submit()
    {
        $data = $this->form->getState();

        // Validate the form data
        $this->validate($data, [
            'id_matkul' => 'required',
            'nim' => 'required',
            'name' => 'required',
            'kelas' => 'required',
            'status' => 'required',
            'bukti' => 'required_without:bukti_surat',
            'bukti_surat' => 'required_without:bukti',
        ]);

        // Create a new Absen instance
        $absen = new Absen();

        // Fill the Absen instance with the form data
        $absen->fill($data);

        // Save the Absen instance to the database
        $absen->save();

        // Redirect to the index page or display a success message
        return redirect()->route('absens.index');
    }
}
