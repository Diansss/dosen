<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AbsenResource\Pages;
use App\Filament\Resources\AbsenResource\RelationManagers;
use App\Models\Absen;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AbsenResource extends Resource implements HasShieldPermissions
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
    protected static ?string $model = Absen::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_matkul')
                ->label('Matakuliah')
                ->live()
                ->searchable()

                ->relationship('matkul', 'id_matkul')
                ->preload()
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
                    'Hadir'=>'Hadir',
                    'Izin'=>'Izin',
                    'Sakit'=>'Sakit',
                    'Tidak Hadir'=>'Tidak Hadir',
                ])->Native(false)
                ->columnSpanFull(),

                TextInput::make('bukti')
                ->visible(fn ($get) => $get('status') == 'Sakit' || $get('status') == 'Izin')
                ->requiredWithoutAll('bukti,bukti_surat')
                ->columnSpanFull(),

                FileUpload::make('bukti_surat')
                ->label('Bukti surat')
                ->visible(fn ($get) => $get('status') == 'Sakit'|| $get('status') == 'Izin')
                ->requiredWithoutAll('bukti,bukti_surat')
                ->columnSpanfull()
                ->image()
                ->directory('surat')
                ->previewable()
                ->openable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('matkul.id_matkul')
                ->label('Matakuliah')
                ->searchable()
                ->sortable(),
                Tables\Columns\TextColumn::make('nim')
                ->searchable()
                ->sortable(),
                Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
                Tables\Columns\TextColumn::make('kelas'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable(),

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
            'index' => Pages\ListAbsens::route('/'),
            'create' => Pages\CreateAbsen::route('/create'),
            'edit' => Pages\EditAbsen::route('/{record}/edit'),
        ];
    }
}
