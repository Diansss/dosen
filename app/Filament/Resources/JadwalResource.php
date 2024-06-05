<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalResource\Pages;
use App\Filament\Resources\JadwalResource\RelationManagers;
use App\Models\Jadwal;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JadwalResource extends Resource
{
    protected static ?string $model = Jadwal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('id_matkul'),
                TextInput::make('matkul'),
                Select::make('jurusan')
                ->options([
                    'D3-TI'=>'D3-TI',
                    'D3-TK'=>'D3-TK',
                    'D4-TIM'=>'D4-TIM',
                    'D4-TRK'=>'D4-TRK',
                ])->native(false)
                ->required(),
                    Select::make('semester')
                    ->required()
                    ->options([
                        ' 1'=>' 1',
                        ' 2'=>' 2',
                        ' 3'=>' 3',
                        ' 4'=>' 4',
                        ' 5'=>' 5',
                        ' 6'=>' 6',
                        ' 7'=>' 7',
                        ' 8'=>' 8',
                    ])->Native(false),
                    Select::make('kelas')
                    ->required()
                    ->options([
                        'A'=>'A',
                        'B'=>'B',
                        'C'=>'C',
                    ])->Native(false),
                    dateTimePicker::make('tanggal'),

            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_matkul'),
                TextColumn::make('matkul'),
                TextColumn::make('tanggal'),
                TextColumn::make('fullKelas')
                    ->label('Kelas')
                    ->getStateUsing(fn ($record) => "{$record->jurusan}-{$record->semester}{$record->kelas}")
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJadwals::route('/'),
            'create' => Pages\CreateJadwal::route('/create'),
            'edit' => Pages\EditJadwal::route('/{record}/edit'),
        ];
    }
    public static function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return Jadwal::query();
    }
}
