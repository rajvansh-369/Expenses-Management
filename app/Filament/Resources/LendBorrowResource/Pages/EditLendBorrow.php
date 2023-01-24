<?php

namespace App\Filament\Resources\LendBorrowResource\Pages;

use App\Filament\Resources\LendBorrowResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLendBorrow extends EditRecord
{
    protected static string $resource = LendBorrowResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
