<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MahasiswaResource\Pages;
use App\Filament\Resources\MahasiswaResource\RelationManagers;
use App\Models\Mahasiswa;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MahasiswaResource extends Resource implements HasShieldPermissions
{
    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'view_any',
            'create',
            'update',
            'delete',
            'delete_any',
            'publish'
        ];
    }
    protected static ?string $model = Mahasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nim')
                ->unique()
                ->columnSpanFull()
                ->required(),
                TextInput::make('nama')
                ->columnSpanFull()
                ->unique()
                ->required(),
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                    TextColumn::make('nim')
                    ->searchable(),
                    TextColumn::make('nama')
                    ->searchable(),
                    TextColumn::make('fullKelas')
                    ->label('Kelas')
                    ->sortable()
                    ->description('Kelas','above')
                    ->getStateUsing(fn ($record) => "{$record->jurusan}-{$record->semester}{$record->kelas}")
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListMahasiswas::route('/'),
            'create' => Pages\CreateMahasiswa::route('/create'),
            'edit' => Pages\EditMahasiswa::route('/{record}/edit'),
        ];
    }
    public static function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return Mahasiswa::query();
    }
}
