<?php

namespace App\Filament\Resources\UserVisitResource\Pages;

use App\Filament\Resources\UserVisitResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserVisit extends EditRecord
{
    protected static string $resource = UserVisitResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
