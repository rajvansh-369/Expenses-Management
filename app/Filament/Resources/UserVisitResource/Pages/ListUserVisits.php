<?php

namespace App\Filament\Resources\UserVisitResource\Pages;

use App\Filament\Resources\UserVisitResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserVisits extends ListRecords
{
    protected static string $resource = UserVisitResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
