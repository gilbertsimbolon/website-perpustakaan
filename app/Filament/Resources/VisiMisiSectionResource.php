<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisiMisiSectionResource\Pages;
use App\Filament\Resources\VisiMisiSectionResource\RelationManagers;
use App\Models\VisiMisiSection;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisiMisiSectionResource extends Resource
{
    protected static ?string $model = VisiMisiSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('visi')
                ->maxLength(255),
                Textarea::make('misi')
                ->maxLength(255)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('visi'),
                TextColumn::make('misi')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListVisiMisiSections::route('/'),
            'create' => Pages\CreateVisiMisiSection::route('/create'),
            'edit' => Pages\EditVisiMisiSection::route('/{record}/edit'),
        ];
    }
}
