<?php

namespace App\Filament\Resources\LendBorrowResource\Pages;

use App\Filament\Resources\LendBorrowResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLendBorrows extends ListRecords
{
    protected static string $resource = LendBorrowResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
