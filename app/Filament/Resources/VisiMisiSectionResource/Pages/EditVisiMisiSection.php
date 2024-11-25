<?php

namespace App\Filament\Resources\VisiMisiSectionResource\Pages;

use App\Filament\Resources\VisiMisiSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVisiMisiSection extends EditRecord
{
    protected static string $resource = VisiMisiSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
